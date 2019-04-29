<?php

namespace App\Http\Controllers\User;

use App\tour;
use App\User;
use App\Booking;
use App\comment;
use Carbon\Carbon;
use App\BookingDetail;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Mail\BookingResultMail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class BookingController extends Controller
{
    /**
     * Show form create.
     *
     * @param  string $slug Slug's tour
     * @return \Illuminate\Http\Response
     */
    public function create(string $slug)
    {

        $tour = tour::with(['hinhThucTour', 'khuyenMai'])->where('slug', $slug)->first();
        $user = \Auth::user();
        abort_if(!$tour, 404);
        return view('booking.create', compact('tour', 'user'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        \DB::beginTransaction();
        try {
            $params = $request->all();
            $tour = tour::where('slug', $params['slug'])->first();
            $params['ma_dat_tour'] = $tour->ma_tour;
            $params['ngay_dat'] = Carbon::parse($params['ngay_dat']);
            $params['thoi_gian'] = (int) $tour->thoi_gian;
            $params['giam_gia'] = 1; //Default value
            $booking = Booking::create($params);
            $params['id_tour'] = $tour->id;
            $params['gia_tien'] = ($tour->gia_tour * $params['nguoi_lon'] + $tour->gia_tour * $params['tre_em']) * $params['giam_gia'];
            $bookingDetail = $booking->bookingDetail()->create($params);
            \DB::commit();
            $this->sendMailUser($params['id_users'], $booking, $bookingDetail, $tour);
            return response()->json('Done', 202);
        } catch (\Exception $e) {
            \DB::rollback();
            \Log::error($e);
            return response()->json('Fail', 500);
        }
    }

    /**
     * Send mail booking result to user.
     * @param int $idUser User id
     * @param Booking $booking Booking
     * @param BookingDetail $bookingDetail Booking Detail
     * @param tour $tour Tour
     *bôking
     * @return void
     */
    public function sendMailUser(int $idUser, Booking $booking, BookingDetail $bookingDetail, tour $tour) {
        try {
            $user = User::find($idUser);
            $mail = (new BookingResultMail($booking, $bookingDetail, $tour))
            ->onConnection('database');
            Mail::to($user)
            ->queue($mail);
        } catch (\Exeception $e) {
            \Log::error($e);
        }
    }
}
