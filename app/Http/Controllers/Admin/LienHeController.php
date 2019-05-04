<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\lien_he;
use App\Http\Controllers\Controller;

class LienHeController extends Controller
{
    public function index()
    {
        $lienhe = lien_he::all();
        return view('admin.lienhe.index',compact('lienhe'));
    }
    public function show($id)
    {
        $lienhe = lien_he::where('id',$id)->first();
        return view('admin.lienhe.show',compact('lienhe'));
    }
    public function destroy($id){
        $lienhe = lien_he::where('id',$id)->delete();
        return redirect()->back();
    }
}
