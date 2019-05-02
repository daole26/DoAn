<?php

namespace App\Http\Controllers\Admin;
use App\dat_tour;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DatTourController extends Controller
{
    public function index()
    {
        $dattours = dat_tour::all();
        return view('admin.dattour.index', compact('dattours'));
    }

    public function create()
    {
       
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
        if($request->month!='' && $request->year!='' && $request->day!=''){
            $ngay_khoi_hanh = date('Y-m-d',mktime(0,0,0,$request->month,$request->day,$request->year));
            $ngay_dat = $dattour->ngay_dat;
            if($ngay_dat>$ngay_khoi_hanh){
                return redirect()->route('dattour.index');
            }
            $dattour->ngay_khoi_hanh = $ngay_khoi_hanh;   
        }
        $dattour->nguoi_lon = $request->adults;
        $dattour->tre_em = $request->children;
        $dattour->em_be = $request->baby;
        $dattour->ghi_chu = $request->notes;
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
