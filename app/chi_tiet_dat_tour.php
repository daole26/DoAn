<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class chi_tiet_dat_tour extends Model
{
    //
    protected $fillable = [
    	'gia_tour', 'tong_tien', 'ghi_chu', 'tour_id', 'dat_tour_id',
    ];

    public function dattour(){
    	return $this->belongsToMany('App\dat_tour', 'dat_tour_id', 'id');
    }

    public function tour(){
    	return $this->belongsToMany('App\tour', 'tour_id', 'id');
    }
}
