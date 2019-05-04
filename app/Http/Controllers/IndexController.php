<?php

namespace App\Http\Controllers;
use App;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __construct()
    {
    }
    public function index()
    {
        $new_tour = App\tour::orderBy('id','desc')->take(5)->get();
        $danhmuc_all= App\danh_muc::all();
        return view('index',compact('new_tour','danhmuc_all'));
    }
    public function tintuc($slug)
    {
        $tintuc = App\tin_tuc::where('slug',$slug)->first();
        return view('tintuc',['slug'=>$slug,'tintuc'=>$tintuc]);
        //return view('index',['tintucs'=>$tintucs]);
    }
}
