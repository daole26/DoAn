<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tin_tuc extends Model
{
    //
    protected $fillable = [
    	'tieu_de', 'noi_dung',
    ];
    public function hinh_anh()
    {
        return $this->morphMany('App\hinh_anh','image');
    }
}
