<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App;
use App\Http\Controllers\Controller;

class HinhThucTourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hinhthucs = App\HinhThucTour::all();
        return view('admin.hinhthuc.index',['hinhthucs'=>$hinhthucs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.hinhthuc.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'hinh_thuc' => 'required',
        ]);
        $hinhthuc = new App\HinhThucTour;
        $hinhthuc->hinh_thuc = $request->hinh_thuc;
        $hinhthuc->save();
        return redirect()->route('hinhthuc.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $hinhthuc = new App\HinhThucTour;
        $hinhthuc = $hinhthuc::where('id',$id)->first();
        return view('admin.hinhthuc.show',compact('hinhthuc'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hinhthuc = new App\HinhThucTour;
        $hinhthuc = $hinhthuc::where('id',$id)->first();
        return view('admin.hinhthuc.edit',compact('hinhthuc'));
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
        $validatedData = $request->validate([
            'hinh_thuc' => 'required',
        ]);
        $hinhthuc = App\HinhThucTour::where('id',$id)->first();
        $hinhthuc->hinh_thuc = $request->hinh_thuc;
        $hinhthuc->slug = null;
        $hinhthuc->save();
        return redirect()->route('hinhthuc.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        App\HinhThucTour::where('id',$id)->delete();
        return redirect()->route('hinhthuc.index');
    }
}
