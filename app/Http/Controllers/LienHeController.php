<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\lien_he;
class LienHeController extends Controller
{
    public function store(Request $request)
    {

        \DB::beginTransaction();
        try{
            $validateData = $request->validate([
                'ho_ten'=>'required',
                'email'=>'required|email',
                'tieu_de'=>'required',
                'noi_dung'=>'required'
            ]);
            $ho_ten = $request->ho_ten;
            $email = $request->email;
            $tieu_de = $request->tieu_de;
            $noi_dung = $request->noi_dung;
            $lienhe = new lien_he;
            $lienhe->ho_ten = $ho_ten;
            $lienhe->email = $email;
            $lienhe->tieu_de = $tieu_de;
            $lienhe->noi_dung = $noi_dung;
            $lienhe->save();
            \DB::commit();
            return ['status'=>'success'];
        }catch(\Exception $e){
            \DB::rollback();
            return [
                'status'=>'fail',
                'except'=>$e->getMessage()
            ];
        }
    }
}
