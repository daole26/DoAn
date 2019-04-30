<?php

namespace App\Http\Controllers\Admin;
use App\danh_muc;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DanhMucController extends Controller
{
    public function index()
    {
        $danhmuc = danh_muc::all();
        return view('admin.danhmuc.index', compact('danhmuc'));
    }

    public function create()
    {
        $danhmuc =  danh_muc::where('parent_id',null)->get();
        return view('admin.danhmuc.create',compact('danhmuc'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'ten_danh_muc' => 'required',
        ]);

        $danh_muc_a = new danh_muc;

        $danh_muc_a->ten_danh_muc = $request->ten_danh_muc;

        if(!empty($request->parent_id)){
            $danh_muc_a->parent_id=$request->parent_id;
        }else{
            $danh_muc_a->parent_id=null;
        }

        $danh_muc_a->save();

        return redirect()->route('danhmuc.index');
    }

    public function show($slug)
    {
        // $id -> FindOrFail($id);
        // slug -> Select * from danhmuc where slug = $slug;
        $danh_muc_a = danh_muc::where('slug', $slug)->first();
        $danh_muc_cha = danh_muc::where('id',$danh_muc_a->parent_id)->first();
        if(!empty($danh_muc_cha)){
            $danh_muc_cha = $danh_muc_cha->ten_danh_muc;
        }else{
            $danh_muc_cha = null;
        }
        return view('admin.danhmuc.show', compact('danh_muc_a','danh_muc_cha'));
    }

    public function edit($slug)
    {
        $danh_muc_a = danh_muc::where('slug', $slug)->first();
        $danhmuc = danh_muc::all();
        return view('admin.danhmuc.edit', compact('danh_muc_a','danhmuc'));
    }

    public function update(Request $request, $slug)
    {
        $validatedData = $request->validate([
            'ten_danh_muc' => 'required|max:100',
        ]);
        $danh_muc_a = danh_muc::where('slug', $slug)->first();
        
        $danh_muc_a->ten_danh_muc = $request->ten_danh_muc;
        if(!empty($request->parent_id)){
            $danh_muc_a->parent_id=$request->parent_id;
        }else{
            $danh_muc_a->parent_id=null;
        }
        $danh_muc_a->slug = null; // Document told that
        $danh_muc_a->save();
        return redirect()->route('danhmuc.index');
    }

    public function destroy($slug)
    {
        // Form : GET, POST - Create, PUT - Update, DELETE - delete -> Write API
        // HTMl Form : GET POST
        $danh_muc_a = danh_muc::where('slug', $slug)->first();
        // Delete current image
        $danh_muc_a->delete($danh_muc_a);
        return redirect()->route('danhmuc.index');
    }
}
