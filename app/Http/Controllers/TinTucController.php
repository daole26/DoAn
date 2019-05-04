<?php

namespace App\Http\Controllers;
use App\tin_tuc;
use App\KhuyenMai;
use Illuminate\Http\Request;

class TinTucController extends Controller
{
    public function __construct()
    {
    }
    public function trangTinTuc()
    {
        $tieude = 'Tin tức';
        $tintuc = tin_tuc::where('loai_tin_tuc',1)->orderBy('id','desc')->take(4)->get();
        return view('news',compact('tintuc','tieude'));
    }
    public function trangAmThuc()
    {
        $tieude = 'Ẩm thực';
        $tintuc = tin_tuc::where('loai_tin_tuc',2)->orderBy('id','desc')->take(4)->get();
        return view('news',compact('tintuc','tieude'));
    }
    public function trangKhuyenMai()
    {
        $khuyenmai = KhuyenMai::all();
        return view('khuyenmai',compact('khuyenmai'));
    }
    public function loadmore($table,$start,$limit){
        if($table=='tintuc'){
            $type = 1;
        }else{
            $type = 2;
        }
        $tintuc = tin_tuc::where('loai_tin_tuc',$type)->orderBy('id','desc')->skip($start)->take($limit)->get();
        $res = [];
        foreach($tintuc as $tintuc){
            $res[]= [
                'tieu_de'=>$tintuc->tieu_de,
                'url'=>asset('images/'.$tintuc->hinh_anh->hinh_anh),
                'slug'=>$tintuc->slug,
                'noi_dung'=>mb_substr(strip_tags($tintuc->noi_dung),0,20)
            ];
        }
        return response()->json($res);
    }
}
