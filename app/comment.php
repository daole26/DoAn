<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    //
    protected $fillable = "comment";

    public function users(){
    	return $this->belongsToMany('App\users', 'user_id', 'id');
    }

    public function tour(){
    	return $this->belongsToMany('App\tour', 'tour_id', 'id');
    }
}
