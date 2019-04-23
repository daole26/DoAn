<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    protected $table = "comments";

    protected $fillable = [
        'noi_dung',
        'user_id',
        'tour_id'
    ];

    public function user(){
    	return $this->belongsTo('App\User', 'user_id', 'id');
    }

    public function tour(){
        return $this->belongsTo('App\tour', 'tour_id', 'id');
    }

    public function getCommentAtAttribute()
    {
        return $this->created_at->format(config('define.date_format'));
    }
}
