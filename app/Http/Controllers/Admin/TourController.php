<?php

namespace App\Http\Controllers\Admin;
use App;
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
        $khuyenmai = App\KhuyenMai::all();
        $hinhthuc = App\HinhThucTour::all();
        return view('admin.tour.create', compact('danhmuc','khuyenmai','hinhthuc'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'ten_tour' => 'required',
            'ma_tour' => 'required',
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
        $tour1->ma_tour = $request->ma_tour;
        $tour1->id_danh_muc = $request->id_danh_muc;
        $tour1->id_khuyen_mai=$request->id_khuyen_mai;
        $tour1->id_hinh_thuc_tour =$request->id_hinh_thuc;
        $tour1->thoi_gian = $request->thoi_gian;
        $tour1->diem_khoi_hanh = $request->diem_khoi_hanh;
        $tour1->lich_trinh = $request->lich_trinh;
        $tour1->phuong_tien = $request->phuong_tien;
        $tour1->gia_tour = $request->gia_tour;
        $tour1->chuong_trinh = $request->chuong_trinh;
        $tour1->dieu_kien = $request->dieu_kien;
        $tour1->phu_luc = $request->phu_luc;

        $tour1->save();
        
        $hinh_anh = new App\HinhAnh;
        $hinh_anh->hinh_anh = $imageName;
        $hinh_anh->image_id = $tour1->id;

        $tour1->hinhAnhs()->save($hinh_anh);

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
        $khuyenmai = App\KhuyenMai::all();
        $hinhthuc = App\HinhThucTour::all();
        return view('admin.tour.edit', compact('tour1', 'danhmuc','khuyenmai','hinhthuc'));
    }

    public function update(Request $request, $slug)
    {
        \DB::beginTransaction();
        try{
            $validatedData = $request->validate([
                'ten_tour' => 'required',
                'ma_tour' => 'required',
                'hinh_anh' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'thoi_gian' => 'required',
                'diem_khoi_hanh' => 'required',
                'lich_trinh' => 'required',
                'phuong_tien' => 'required',
                'gia_tour' => 'required',
                'chuong_trinh' => 'required',
                'dieu_kien' => 'required',
                'phu_luc' => 'required',
            ]);
            
            $tour1 = tour::where('slug', $slug)->first();

            if (!empty($request->hinh_anh)) {
                // Delete the previous image
                if(file_exists(public_path('images/'.$tour1->hinhAnhs[0]->hinh_anh))){
                    unlink(public_path('images/'.$tour1->hinhAnhs[0]->hinh_anh));
                }
                $imageName = time() . '.' . request()->hinh_anh->getClientOriginalExtension();
                request()->hinh_anh->move(public_path('images'), $imageName);
            }

            $tour1->ten_tour = $request->ten_tour;
            $tour1->ma_tour = $request->ma_tour;
            $tour1->id_danh_muc = $request->id_danh_muc;
            $tour1->id_khuyen_mai=$request->id_khuyen_mai;
            $tour1->id_hinh_thuc_tour =$request->id_hinh_thuc;
            $tour1->thoi_gian = $request->thoi_gian;
            $tour1->diem_khoi_hanh = $request->diem_khoi_hanh;
            $tour1->lich_trinh = $request->lich_trinh;
            $tour1->phuong_tien = $request->phuong_tien;
            $tour1->gia_tour = $request->gia_tour;
            $tour1->chuong_trinh = $request->chuong_trinh;
            $tour1->dieu_kien = $request->dieu_kien;
            $tour1->phu_luc = $request->phu_luc;

            $tour1->save();
            if (!empty($request->hinh_anh)) {
                $tour1->hinhAnhs()->update(['hinh_anh'=>$imageName]);
            }
            \DB::commit();
            return redirect()->route('tour.index');
        }catch(\Exception $e){
            echo $e->getMessage();
            \DB::rollback();
            //return redirect()->route('tour.index');
        }
    }

    public function destroy($slug)
    {
        $tour1 = tour::where('slug', $slug)->first();
        $tour1->delete($tour1);
        return redirect()->route('tour.index');
    }
}
