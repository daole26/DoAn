<?php

namespace App\Http\Controllers\Admin;
use App\KhuyenMai;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KhuyenMaiController extends Controller
{
    public function index()
    {
        $khuyenmai = KhuyenMai::all();
        return view('admin.khuyenmai.index', compact('khuyenmai'));
    }

    public function create()
    {
        return view('admin.khuyenmai.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'khuyen_mai' => 'required',
        ]);

        $khuyenmai = new KhuyenMai;

        $khuyenmai->khuyen_mai = $request->khuyen_mai;

        $khuyenmai->save();

        return redirect()->route('khuyenmai.index');
    }

    public function show($id)
    {
        $khuyenmai = KhuyenMai::where('id', $id)->first();
        return view('admin.khuyenmai.show', compact('khuyenmai'));
    }

    public function edit($id)
    {
        $khuyenmai = KhuyenMai::where('id', $id)->first();
        return view('admin.khuyenmai.edit', compact('khuyenmai'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'khuyen_mai' => 'required',
        ]);
        $khuyenmai = KhuyenMai::where('id', $id)->first();
        
        $khuyenmai->khuyen_mai = $request->khuyen_mai;
        $khuyenmai->save();
        return redirect()->route('khuyenmai.index');
    }

    public function destroy($id)
    {
        $khuyenmai = KhuyenMai::where('id', $id)->delete();
        return redirect()->route('khuyenmai.index');
    }
}
