<?php

namespace App\Http\Controllers;
use App;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $tintucs = App\tin_tuc::all();
        return view('index',['tintucs'=>$tintucs]);
    }
    public function tintuc($slug)
    {
        $tintucs = App\tin_tuc::where('slug',$slug)->first();
        return view('tintuc',['slug'=>$slug,'tintuc'=>$tintuc]);
        //return view('index',['tintucs'=>$tintucs]);
    }
}
