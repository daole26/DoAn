<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class tour extends Model
{
    use Sluggable;

    protected $fillable = [
        'ten_tour', 'ma_dat_tour', 'danh_muc_id', 'hinh_anh', 'thoi_gian' , 'diem_khoi_hanh', 'lich_trinh', 'phuong_tien', 'gia_tour', 'chuong_trinh', 'dieu_kien', 'phu_luc', 'slug',
    ];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'ten_tour',
            ],
        ];
    }

    public function danhmuc(){
    	return $this->belongsTo('App\danh_muc', 'danh_muc_id', 'id');
    }

    public function comments(){
    	return $this->hasMany('App\comment', 'tour_id', 'id');
    }

    public function chi_tiet_dat_tour(){
    	return $this->hasMany('App\chi_tiet_dat_tour', 'tour_id', 'id');
    }
}
