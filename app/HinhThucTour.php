<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HinhThucTour extends Model
{
    protected $table = 'hinh_thuc_tours';

    protected $fillable = [
        'hinh_thuc'
    ];

    public function tours()
    {
        return $this->hasMany(tour::class, 'id_hinh_thuc_tour', 'id');
    }
}
