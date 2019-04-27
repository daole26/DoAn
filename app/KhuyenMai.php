<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KhuyenMai extends Model
{
    protected $table = 'khuyen_mais';

    protected $fillable = [
        'khuyen_mai'
    ];

    public function tours()
    {
        return $this->hasMany(tour::class, 'id_khuyen_mai', 'id');
    }
}
