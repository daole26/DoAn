<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App;
use App\Http\Controllers\Controller;

class TinTucController extends Controller
{
    public function index()
    {
        $tintuc = App\tin_tuc::all();
        return view('admin.tintuc.show',['tintucs'=>$tintuc]);
    }
    public function insert(){
        return view('admin.tintuc.insert');
    }
    public function edit($id)
    {
        $tintuc = App\tin_tuc::where('id',$id)->first();
        return view('admin.tintuc.edit',['tintuc'=>$tintuc]);
    }
    public function detail($id)
    {
        $tintuc = App\tin_tuc::where('id',$id)->first();
        return view('admin.tintuc.detail',['tintuc'=>$tintuc]);
    }
    public function postEdit(Request $request)
    {
        $validatedData = $request->validate([
            'tieu_de' => 'required',
            'noi_dung' => 'required',
            'hinh_anh' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        $arr_update=[
            'tieu_de'=>$request->tieu_de,
            'noi_dung'=>$request->noi_dung,
            'loai_tin_tuc'=>$request->loai_tin_tuc
        ];
        $tintuc = App\tin_tuc::where('id',$request->id);
        $tintuc->update($arr_update);
        if(!empty($request->hinh_anh)){
            $tintuc = $tintuc->first();
            $path = public_path('images/'.$tintuc->hinh_anh->hinh_anh);
            if(file_exists($path)){
                unlink($path);
            }
            $imageName = time().'.'.$request->hinh_anh->getClientOriginalExtension();
            $request->hinh_anh->move(public_path('images'),$imageName);
            $tintuc->hinh_anh->update(['hinh_anh'=>$imageName]);
        }
        return redirect()->route('tintuc.index');
    }
    public function delete($id)
    {
        $tintuc = App\tin_tuc::where('id',$id);
        $hinh_anh = $tintuc->first()->hinh_anh->first();
        $path = public_path('images/'.$hinh_anh->hinh_anh);
        if(file_exists($path)){
            unlink($path);
        }
        $tintuc->delete();
        $hinh_anh->delete();
        return redirect()->route('tintuc.index');
    }
    public function  store(Request $request){

        $validatedData = $request->validate([
            'tieu_de' => 'required',
            'noi_dung' => 'required',
            'hinh_anh' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $tintuc = new App\tin_tuc;
        $tintuc->tieu_de = $request->tieu_de;
        $tintuc->noi_dung = $request->noi_dung;
        $tintuc->loai_tin_tuc = $request->loai_tin_tuc;
        $tintuc->save();
        $imageName = time().'.'.$request->hinh_anh->getClientOriginalExtension();
        $request->hinh_anh->move(public_path('images'),$imageName);
        $hinh_anh = new App\HinhAnh;
        $hinh_anh->hinh_anh = $imageName;
        $hinh_anh->image_id = $tintuc->id;
        $hinh_anh->image_type = 'tin_tucs';
        $tintuc->hinh_anh()->save($hinh_anh);
        return redirect()->route('tintuc.index');
    }
}
