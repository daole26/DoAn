<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HinhAnh extends Model
{
    protected $table = 'hinh_anhs';

    protected $fillable = [
        'image_type',
        'image_id',
        'hinh_anh'
    ];

    const TYPE_TOUR = 'tour';
    const TYPE_TIN_TUC = 'tin_tuc';

    /**
     * One tour has many images
     */
    public function image()
    {
        return $this->morphTo();
    }
}
