<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class tin_tuc extends Model
{
    use Sluggable;
    protected $fillable = [
    	'tieu_de', 'noi_dung',
    ];
    public function sluggable()
    {
        return [
            'slug'=>[
                'source'=>'tieu_de'
            ]
        ];
    }
    public function hinh_anh()
    {
        return $this->morphOne('App\HinhAnh','image');
    }
}
