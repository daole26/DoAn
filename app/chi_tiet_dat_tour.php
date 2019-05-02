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
    	return $this->belongsTo('App\dat_tour', 'id_dat_tour', 'id');
    }

    public function tour(){
    	return $this->belongsTo('App\tour', 'id_tour', 'id');
    }
}
