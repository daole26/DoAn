<?php

namespace App\Http\Controllers\Admin;

use App\tour;
use App\comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommentController extends Controller
{
    /**
     * Get list comment of user
     * @param string $slug Tour slug
     */
    public function index(string $slug)
    {
        $tour = tour::where('slug', $slug)->first();
        $comments = comment::join('tours', 'tours.id', '=', 'comments.tour_id')
            ->join('users', 'users.id', '=', 'comments.user_id')
            ->where('tours.slug', $slug)
            ->select(['comments.*', 'users.ten_hien_thi as user_name'])
            ->paginate(10);
        return view('Admin.comment.index', compact(['comments', 'tour']));
    
    }

    /**
     * Get list comment of user
     * @param string $slug Tour slug
     * @param int $id Comment id
     */
    public function destroy(string $slug, int $id)
    {
        $tour = tour::where('slug', $slug)->first();
        $comment = comment::findOrFail($id);
        if ($tour && $comment && $comment->tour_id == $tour->id) {
            $comment->delete();
            session()->flash('flashType', 'success');
            session()->flash('flashMessage', 'Xoá thành công');
            return redirect()->back();
        }
        session()->flash('flashType', 'danger');
        session()->flash('flashMessage', 'Xoá thất bại');
        return redirect()->back();
    }
}
