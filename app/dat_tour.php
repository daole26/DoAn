<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dat_tour extends Model
{
    //
    protected $fillable = [
    	'ma_dat_tour', 'ngay_dat', 'thang', 'nam', 'ho_ten_KH', 'email',
    	'dia_chi', 'nguoi_lon', 'tre_em', 'em_be', 'giam_gia', 'ghi_chu',
    ];

    public function chitietdattour(){
    	return $this->hasMany('App\chi_tiet_dat_tour', 'id_dat_tour', 'id');
    }
    public function users(){
    	return $this->belongsTo('App\User', 'id_users', 'id');
    }

}
