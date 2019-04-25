<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TinTucController extends Controller
{
    public function index()
    {
        return view('admin.tintuc.show');
    }
    public function insert(){
        return view('admin.tintuc.insert');
    }
    public function  store(Request $request){
        //$imageName = time().'.'.$request->hinh_anh->getClientOriginalExtension();
        //$request->hinh_anh->move(public_path('images'),$imageName);
    }
}
