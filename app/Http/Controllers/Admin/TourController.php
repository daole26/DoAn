<?php

namespace App\Http\Controllers\Admin;
use App\tour;
use App\danh_muc;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TourController extends Controller
{
    public function index()
    {
        $tours = tour::all();
        return view('admin.tour.index', compact('tours'));
    }

    public function create()
    {
        $danhmuc = danh_muc::all();
        return view('admin.tour.create', compact('danhmuc'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'ten_tour' => 'required',
            'ma_dat_tour' => 'required',
            'hinh_anh' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'thoi_gian' => 'required',
            'diem_khoi_hanh' => 'required',
            'lich_trinh' => 'required',
            'phuong_tien' => 'required',
            'gia_tour' => 'required',
            'chuong_trinh' => 'required',
            'dieu_kien' => 'required',
            'phu_luc' => 'required',
        ]);

        $tour1 = new tour;
        $imageName = time().'.'.request()->hinh_anh->getClientOriginalExtension();
        request()->hinh_anh->move(public_path('images'), $imageName);
        
        $tour1->ten_tour = $request->ten_tour;
        $tour1->ma_dat_tour = $request->ma_dat_tour;
        $tour1->danh_muc_id = $request->danh_muc_id;
        $tour1->hinh_anh= $imageName;
        $tour1->thoi_gian = $request->thoi_gian;
        $tour1->diem_khoi_hanh = $request->diem_khoi_hanh;
        $tour1->lich_trinh = $request->lich_trinh;
        $tour1->phuong_tien = $request->phuong_tien;
        $tour1->gia_tour = $request->gia_tour;
        $tour1->chuong_trinh = $request->chuong_trinh;
        $tour1->dieu_kien = $request->dieu_kien;
        $tour1->phu_luc = $request->phu_luc;

        $tour1->save();

        return redirect()->route('tour.index');
    }

    public function show($slug)
    {
        $tour1 = tour::where('slug', $slug)->first();
        return view('admin.tour.show', compact('tour1'));
    }

    public function edit($slug)
    {
        $tour1 = tour::where('slug', $slug)->first();
        $danhmuc = danh_muc::all();
        return view('admin.tour.edit', compact('tour1', 'danhmuc'));
    }

    public function update(Request $request, $slug)
    {
        $validatedData = $request->validate([
            'ten_tour' => 'required',
            'ma_dat_tour' => 'required|max:50',
            'thoi_gian' => 'required',
            'diem_khoi_hanh' => 'required',
            'lich_trinh' => 'required',
            'phuong_tien' => 'required',
            'gia_tour' => 'required|numeric:10',
            'chuong_trinh' => 'required',
            'dieu_kien' => 'required',
            'phu_luc' => 'required',
        ]);
        
        $tour1 = tour::where('slug', $slug)->first();

        if (isset($request->hinh_anh)) {
            // Delete the previous image
            $imageName = time() . '.' . request()->hinh_anh->getClientOriginalExtension();
            request()->hinh_anh->move(public_path('images'), $imageName);
            $tour1->hinh_anh = $imageName;
        }

        $tour1->slug = null;
        $tour1->ten_tour = $request->ten_tour;
        $tour1->ma_dat_tour = $request->ma_dat_tour;
        $tour1->danh_muc_id = $request->danh_muc_id;
        $tour1->diem_khoi_hanh = $request->diem_khoi_hanh;
        $tour1->lich_trinh = $request->lich_trinh;
        $tour1->phuong_tien = $request->phuong_tien;
        $tour1->gia_tour = $request->gia_tour;
        $tour1->chuong_trinh = $request->chuong_trinh;
        $tour1->dieu_kien = $request->dieu_kien;
        $tour1->phu_luc = $request->phu_luc;

        $tour1->save();

        return redirect()->route('tour.index');
    }

    public function destroy($slug)
    {
        $tour1 = tour::where('slug', $slug)->first();
        $tour1->delete($tour1);
        return redirect()->route('tour.index');
    }
}
