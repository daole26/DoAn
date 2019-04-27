<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookingDetail extends Model
{
    protected $table = 'chi_tiet_dat_tours';

    protected $fillable = [
        'id_tour',
        'id_dat_tour',
        'gia_tien',
        'ghi_chu',
    ];

    public function booking()
    {
        return $this->belongsTo(Booking::class, 'id_dat_tour', 'id');
    }

    public function tour()
    {
        return $this->belongsTo(tour::class, 'id_tour', 'id');
    }
}
