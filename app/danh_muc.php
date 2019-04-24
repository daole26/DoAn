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
    	return $this->hasMany('App\tour', 'danh_muc_id', 'id');
    }
}
