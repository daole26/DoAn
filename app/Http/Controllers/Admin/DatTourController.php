<?php

namespace App\Http\Controllers\Admin;
use App\dat_tour;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DatTourController extends Controller
{
    public function index()
    {
        $dattour = dat_tour::all();
        return view('admin.dattour.index', compact('dattour'));
    }

    public function create()
    {
        return view('admin.dattour.create');
    }

    public function store(Request $request)
    {
        $dattour = new dat_tour;

        $dattour->ma_dat_tour = $request->ma_dat_tour;
        $dattour->ngay_dat = $request->ngay_dat;
        $dattour->thang = $request->thang;
        $dattour->nam = $request->nam;
        $dattour->ho_ten_KH = $request->ho_ten_KH;
        $dattour->email = $request->email;
        $dattour->dia_chi = $request->dia_chi;
        $dattour->nguoi_lon = $request->nguoi_lon;
        $dattour->tre_em = $request->tre_em;
        $dattour->em_be = $request->em_be;
        $dattour->ghi_chu = $request->ghi_chu;
        $dattour->user_id = $request->user_id;
      
        $dattour->save();

        return redirect()->route('dattour.index');
    }

    public function show($id)
    {
        $dattour = dat_tour::where('id',$id)->first();
        return view('admin.dattour.show', compact('dattour'));
    }

    public function edit($id)
    {
        $dattour = dat_tour::where('id',$id)->first();
        return view('admin.dattour.edit', compact('dattour'));
    }

    public function update(Request $request, $id)
    {
        $dattour = dat_tour::where('id',$id)->first();

        $dattour->ma_dat_tour = $request->ma_dat_tour;
        $dattour->ngay_dat = $request->ngay_dat;
        $dattour->thang = $request->thang;
        $dattour->nam = $request->nam;
        $dattour->ho_ten_KH = $request->ho_ten_KH;
        $dattour->email = $request->email;
        $dattour->dia_chi = $request->dia_chi;
        $dattour->nguoi_lon = $request->nguoi_lon;
        $dattour->tre_em = $request->tre_em;
        $dattour->em_be = $request->em_be;
        $dattour->ghi_chu = $request->ghi_chu;
        $dattour->user_id = $request->user_id;
      
        $dattour->save();

        return redirect()->route('dattour.index');
    }

	public function destroy($id)
    {
        $dattour = dat_tour::where('id',$id)->first();
        $dattour->delete($dattour);
        return redirect()->route('dattour.index');
    }

}
