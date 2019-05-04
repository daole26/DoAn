<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class HinhThucTour extends Model
{
	use Sluggable;
    protected $table = 'hinh_thuc_tours';

    protected $fillable = [
        'hinh_thuc'
    ];
    public function sluggable()
    {
    	return [
    		'slug'=>[
    			'source'=>'hinh_thuc'
    		]
    	];
    }
    public function tours()
    {
        return $this->hasMany(tour::class, 'id_hinh_thuc_tour', 'id');
    }
}
