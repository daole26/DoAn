@extends('admin.layouts.master')
@section('Content')
<div class="box box-success" style="position: relative; left: 0px; top: 0px;">
    <h3 class="comment-title">Comment</h3>
        @foreach($comments as $comment)
        <div class="comment-item">
            <p class="comment-message">
                {{ $comment->noi_dung }}
            </p>
            <div class="comment-footer">
                <a href="{{ route('user.show', $comment->user_id) }}" class="name">{{ $comment->user_name }} </a>
                <span class="comment-at"><i class="fa fa-clock-o"></i>{{ $comment->comment_at }}</span>
                <span class="text-muted pull-right">
                    <form action="{{ route('tour.comment.destroy', [$tour->slug, $comment->id]) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-flat" onclick="return confirm('Bạn có chắc chắn xoá?')">
                            <i class="fa fa-trash"></i>
                        </button>
                    </form>
                </span>
            </div>
        </div>
        @endforeach
        <div class="paginate-block">
            {{ $comments->links() }}
        </div>
        <div class="box-footer">
            <a href="{{ route('tour.show', $tour->slug)}}" class="btn btn-default btn-flat">Quay lại</a>
        </div>
</div>
@endsection
