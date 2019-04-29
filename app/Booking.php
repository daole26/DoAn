<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = 'dat_tours';

    protected $fillable = [
        'id_users',
        'ma_dat_tour',
        'ngay_dat',
        'thoi_gian',
        'nguoi_lon',
        'tre_em',
        'em_be',
        'giam_gia',
        'ghi_chu',
    ];

    /**
     * One booking has one booking detail.
     */
    public function bookingDetail()
    {
        return $this->hasOne(BookingDetail::class, 'id_dat_tour', 'id');
    }

    /**
     * One booking belongs one user.
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'id_users');
    }
}
