<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use App\comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function loadMore($id,$start,$limit)
    {
        $comment = comment::where('id_tour',$id)->orderBy('id','desc')->skip($start)->take($limit)->get();
        $data  = [];
        foreach($comment as $comment){
            $data_item = [
                'name' => $comment->user->ten_hien_thi,
                'date' => $comment->created_at,
                'content' => $comment->noi_dung
            ];
            $data[] = $data_item;
        }
        return response()->json($data);
    }
    public function store(Request $request)
    {
        $comment = new comment;
        $comment->id_users=$request->id_user;
        $comment->noi_dung = $request->content;
        $comment->id_tour = $request->id;
        $res = $comment->save();
        if($res){
            return response()->json([
                'name'=>$comment->user->ten_hien_thi,
                'email'=>$comment->email,
                'content'=>$comment->noi_dung,
                'date'=>$comment->created_at->format('Y-m-d H:i:s')
            ]);
        }
        return '';
    }
}