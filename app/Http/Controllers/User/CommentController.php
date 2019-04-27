<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\comment;
use Illuminate\Http\Response;

class CommentController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $comment = comment::create($request->all()['vdata']);
            return response()->json([
                    'noi_dung' => $comment->noi_dung,
                    'ten_hien_thi' => $comment->user->ten_hien_thi,
                    'comment_at' => $comment->comment_at,
                ], 200);
        } catch (\Exception $e) {
            \Log::error($e);
            return response()->json('Xảy ra lỗi không xác định', 500);
        }
    }

    /**
     * Load more comments
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function loadMore(Request $request) {
        try {
            $comments = comment::join('users', 'users.id', '=', 'comments.id_users')
                ->select([
                    'comments.noi_dung','users.ten_hien_thi',
                    \DB::raw('DATE_FORMAT(comments.created_at,"' . '%H:%i %d-%m-%Y' . '") as comment_at_time')
                ])->where('comments.id_tour', $request->id_tour)
                ->orderBy('comments.created_at', 'DESC')
                ->skip($request->index)
                ->limit(3)
                ->get();
            return response()->json($comments, 200);
        } catch(\Exception $e) {
            \Log::error($e);
            return response()->json('Error', 500);
        }
    }
}
