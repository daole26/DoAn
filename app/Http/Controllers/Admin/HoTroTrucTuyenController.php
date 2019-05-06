<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\ho_tro_truc_tuyen;
use App\Http\Controllers\Controller;

class HoTroTrucTuyenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hotro = ho_tro_truc_tuyen::all();
        return view('admin.hotrotructuyen.index',compact('hotro'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(!empty($request->hinh_anh) && !empty($request->ten) && !empty($request->url)){
            \DB::beginTransaction();
            try{
                $imageName = time().'.'.request()->hinh_anh->getClientOriginalExtension();
                request()->hinh_anh->move(public_path('images/hotro'), $imageName);
                $hotro = new ho_tro_truc_tuyen;
                $hotro->ten = $request->ten;
                $hotro->url = $request->url;
                $hotro->hinh_anh = $imageName;
                $hotro->sdt = $request->sdt;
                $res = $hotro->save();
                if($res){
                    \DB::commit();
                    return response()->json([
                        'status'=>'ok',
                        'page'=>'store',
                        'hinh_anh'=>$hotro->hinh_anh,
                        'ten'=>$hotro->ten,
                        'url'=>$hotro->url,
                        'sdt'=>$hotro->sdt,
                        'id'=>$hotro->id
                    ]);
                }else{
                    \DB::rollBack();
                    return response()->json([
                        'status'=>'fail',
                        'page'=>'store'
                    ]);
                }
            }catch(\Exception $e){
                \DB::rollBack();
                return response()->json([
                    'status'=>'fail',
                    'page'=>'store',
                    'error'=>$e->getMessage()
                ]);
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        \DB::beginTransaction();
        try{

            $hotro = ho_tro_truc_tuyen::where('id',$request->id)->first();
            $hotro->ten = $request->ten;
            $hotro->url = $request->url;
            if(!empty($request->hinh_anh)){
                $imageName = time().'.'.request()->hinh_anh->getClientOriginalExtension();
                    request()->hinh_anh->move(public_path('images/hotro'), $imageName);
                $hinhanh = $hotro->hinh_anh;
                if(file_exists(public_path('images/hotro/'.$hinhanh))){
                    unlink(public_path('images/hotro/'.$hinhanh));
                }
                $hotro->hinh_anh = $imageName;
            }
            $hotro->sdt = $request->sdt;
            $res = $hotro->save();

            \DB::commit();
            return response()->json([
                'page'=>'update',
                'status'=>'ok',
                'hinh_anh'=>$hotro->hinh_anh,
                'ten'=>$hotro->ten,
                'url'=>$hotro->url,
                'sdt'=>$hotro->sdt,
                'id'=>$hotro->id
            ]);
        }catch(\Exception $e){
            \DB::rollback();
            return response()->json([
                'page'=>'update',
                'status'=>'fail',
                'error'=>$e->getMessage()
            ]);
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        \DB::beginTransaction();
        try{
            $hinhanh = ho_tro_truc_tuyen::where('id',$id)->first()->hinh_anh;
            if(file_exists(public_path('images/hotro/'.$hinhanh))){
                unlink(public_path('images/hotro/'.$hinhanh));
            }
            $res = ho_tro_truc_tuyen::where('id',$id)->delete();
            if($res){
                \DB::commit();
                return response()->json([
                    'page'=>'delete',
                    'status'=>'ok',
                    'id'=>$id
                ]);
            }
            \DB::rollback();
            return response()->json([
                'page'=>'delete',
                'status'=>'fail'
            ]);
        }catch(\Exception $e){
            \DB::rollback();
            echo $e->getMessage();
        }
    }
}
