<?php

namespace App\Http\Controllers\User;

use App\tour;
use App\Booking;
use App\comment;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;

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
            $booking->bookingDetail()->create($params);
            return response()->json('Done', 202);
        } catch (\Exception $e) {
            \Log::error($e);
            return response()->json('Fail', 500);
        }
    }
}
