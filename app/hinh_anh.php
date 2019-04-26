<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hinh_anh extends Model
{
    protected $fillable=['hinh_anh'];
    public function image(){
        return $this->morphTo();
    }
}
