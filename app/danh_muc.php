<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class danh_muc extends Model
{
    use Sluggable;

    protected $fillable = [
    	'ten_danh_muc', 'slug',
    ];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'ten_danh_muc',
            ],
        ];
    }
    public function tours(){
        return $this->hasMany('App\tour','id_danh_muc','id');
    }
    public function indexTours(){
        return $this->tours()->take(20)->orderBy('id','desc');
    }
}
