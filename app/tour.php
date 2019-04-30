<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class tour extends Model
{
    use Sluggable;

    protected $fillable = [
        'ten_tour', 'ma_tour', 'id_danh_muc', 'thoi_gian' , 'diem_khoi_hanh', 'lich_trinh', 'phuong_tien', 'gia_tour', 'chuong_trinh', 'dieu_kien', 'phu_luc', 'slug',
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
    	return $this->belongsTo('App\danh_muc', 'id_danh_muc', 'id');
    }

    public function comments(){
    	return $this->hasMany('App\comment', 'id_tour', 'id');
    }

    public function khuyenMai(){
    	return $this->belongsTo(KhuyenMai::class, 'id_khuyen_mai', 'id');
    }

    public function hinhThucTour(){
    	return $this->belongsTo(HinhThucTour::class, 'id_hinh_thuc_tour', 'id');
    }

    public function chi_tiet_dat_tour(){
    	return $this->hasMany('App\chi_tiet_dat_tour', 'id_tour', 'id');
    }
    public function hinhAnhs()
    {
        return $this->morphMany(HinhAnh::class, 'image');
    }
    public function searchTour($name)
    {
        return $this->where('ten_tour','like','%'.$name.'%')->get();
    }
}
