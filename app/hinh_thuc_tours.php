<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hinh_thuc_tours extends Model
{
     protected $fillable =[
    	'id', 'hinh_thuc',
    ];

    public function tour(){
    	return $this->hasMany('App\tour', 'id_hinh_thuc_tour', 'id');
    }

    public function getAll()
    {
    	return $this->all();
    }
}
