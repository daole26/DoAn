<?php

namespace App\Http\Controllers;
use App\Mail\BookingResultMail;
use App\tour;
use App\dat_tour;
use App\chi_tiet_dat_tour;
use App\DanhMucClass;
use Illuminate\Http\Request;

class DatTourController extends Controller
{
    public function show($slug)
    {
        $danhmuc = DanhMucClass::getDanhMuc();
        $tour = tour::where('slug',$slug)->first();
        return view('dattour',compact('danhmuc','tour'));
    }
    public function sendMailUser(string $email, dat_tour $booking, chi_tiet_dat_tour $bookingDetail, tour $tour) {
        try {
            \Mail::to($email)
            ->send(new BookingResultMail($booking, $bookingDetail, $tour));
        } catch (\Exeception $e) {
            \Log::error($e);
        }
    }
    public function dattour(Request $request)
    {
        $cur_date = date('Y-m-d');
        $ngay_khoi_hanh = date('Y-m-d',mktime(0,0,0,$request->month,$request->day,$request->year));
        if($cur_date>$ngay_khoi_hanh){
            echo 'Ngày khởi hành phải đặt sau ngày hiện tại<br>';
            return redirect()->back();
        }
        \DB::beginTransaction();
        try{
            $dattour = new dat_tour;

            $dattour->ma_dat_tour = $request->ma_tour.'-'.date('dmYhis');
            $dattour->id_users = \Auth::user()->id;
            $dattour->ngay_dat = $cur_date;
            $dattour->ngay_khoi_hanh = $ngay_khoi_hanh;
            $dattour->email = $request->email;
            $dattour->diachi = $request->address;
            $dattour->so_dien_thoai = $request->phone;
            $dattour->nguoi_lon = $request->adults;
            $dattour->tre_em = $request->children;
            $dattour->em_be = $request->baby;
            $dattour->ghi_chu = $request->notes;
            $dattour->save();

            $chitietdattour = new chi_tiet_dat_tour;
            $chitietdattour->id_tour = $request->id_tour;
            $chitietdattour->id_dat_tour = $dattour->id;
            $chitietdattour->gia_tien = $request->gia_tour;
            $chitietdattour->save();
            \DB::commit();
            $this->sendMailUser($request->email,$dattour,$chitietdattour,$chitietdattour->tour);
            echo 'Chèn thành công, kiểm tra email của bạn<br>';
            return redirect()->back();
        }catch(\Exception $e){
            \DB::rollBack();
            var_dump($e->getMessage());
        }
    }
}
