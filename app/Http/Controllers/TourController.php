<?php

namespace App\Http\Controllers;
use App\tour;
use App\danh_muc;
use Illuminate\Http\Request;

class TourController extends Controller
{
    protected $danhmuc;
    public function __construct()
    {
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tour = tour::orderBy('id','desc')->get();
        return view('tour.index',compact('tour'));
    }

    public function showWithDanhMuc($slug)
    {
        $_danhmuc = danh_muc::where('slug',$slug)->first();
        $id_danhmuc = $_danhmuc->id;
        $tour = tour::where('id_danh_muc',$id_danhmuc)->get();
        return view('tour.index',compact('tour'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $tour = tour::where('slug',$slug)->first();
        return view('detail',compact('tour'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
