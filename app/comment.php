<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    protected $table = "comments";

    protected $fillable = [
        'noi_dung',
        'id_users',
        'id_tour'
    ];
    public function tour(){
        return $this->belongsTo('App\tour', 'id_tour', 'id');
    }
    public function user()
    {
        return $this->belongsTo('App\User','id_users','id');
    }

    public function getCommentAtAttribute()
    {
        return $this->created_at->format(config('define.date_format'));
    }
}
