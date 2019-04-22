<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function index(){
    	$users = User::all();
    	return view('admin.user.index',compact('users'));
    }

    public function create(){
    	return view('admin.user.create');
    }

    public function store(Request $request)
    {
    	$validatedData = $request->validate([
            'ten_hien_thi' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'so_dien_thoai' => 'required|numeric',
            'dia_chi' => 'required|max:255',
            'level' =>'required'
        ]);

        $user = new User;

        $user->ten_hien_thi = $request->ten_hien_thi;
        $user->email = $request->email;
        $user->password = \Hash::make($request->password);
        $user->so_dien_thoai = $request->so_dien_thoai;
        $user->dia_chi = $request->dia_chi;
        $user->level = $request->level;
        $user->token = 'null';
        $user->active = 1 ;
        $user->save();
        return redirect()->route('user.index');
    }

    public function show($id){
    	$user = User::where('id', $id)->first();
        return view('admin.user.show', compact('user'));
    }

    public function edit($id){
    	$user = User::where('id', $id)->first();
        return view('admin.user.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'ten_hien_thi' => 'required',
            'email' => 'required|email',
            'so_dien_thoai' => 'required',
            'dia_chi' => 'required',
        ]);
        $user = User::where('id', $id)->first();
        $user->ten_hien_thi = $request->ten_hien_thi;
        $user->email = $request->email;
        // $user->password = $request->password;
        $user->so_dien_thoai = $request->so_dien_thoai;
        $user->dia_chi = $request->dia_chi;
        $user->level = $request->level;
        $user->active = $request->active;
        $user->save();
        return redirect()->route('user.index');
    }

    public function destroy($id)
    {
        $user = User::where('id', $id)->first();
        $user->delete($user);
        return redirect()->route('user.index');
    }
}
