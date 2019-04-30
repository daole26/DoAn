<?php

namespace App\Http\Controllers;
use App;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    protected $danhmuc;
    public function __construct()
    {
        $this->danhmuc = App\danh_muc::where('parent_id',null)->get();
        for($i=0;$i<count($this->danhmuc);$i++){
            $this->danhmuc[$i]['child'] = App\danh_muc::where('parent_id',$this->danhmuc[$i]->id)->get();
        }
    }
    public function index()
    {
        $tintucs = App\tin_tuc::orderBy('id','desc')->get();
        $new_tour = App\tour::orderBy('id','desc')->take(5)->get();
        $danhmuc=$this->danhmuc;
        $danhmuc_all= App\danh_muc::all();
        return view('index',compact('tintucs','new_tour','danhmuc','danhmuc_all'));
    }
    public function tintuc($slug)
    {
        $tintuc = App\tin_tuc::where('slug',$slug)->first();
        return view('tintuc',['slug'=>$slug,'tintuc'=>$tintuc]);
        //return view('index',['tintucs'=>$tintucs]);
    }
}
