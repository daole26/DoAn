<?php

namespace App\Http\Controllers;
use App\tour;
use App\danh_muc;
use App\DanhMucClass;
use Illuminate\Http\Request;

class TourController extends Controller
{
    protected $danhmuc;
    public function __construct()
    {
        $this->danhmuc = DanhMucClass::getDanhMuc();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $danhmuc=$this->danhmuc;
        $tour = tour::all();
        return view('tour.index',compact('danhmuc','tour'));
    }

    public function showWithDanhMuc($slug)
    {
        $danhmuc=$this->danhmuc;
        $_danhmuc = danh_muc::where('slug',$slug)->first();
        $id_danhmuc = $_danhmuc->id;
        $tour = tour::where('id_danh_muc',$id_danhmuc)->get();
        return view('tour.index',compact('danhmuc','tour'));
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
        $danhmuc = $this->danhmuc;
        $danhmuc2 = $this->danhmuc;
        $tour = tour::where('slug',$slug)->first();
        return view('detail',compact('danhmuc','danhmuc2','tour'));
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
