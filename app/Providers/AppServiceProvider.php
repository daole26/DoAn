<?php

namespace App\Providers;

use App\tour;
use App\HinhAnh;
use App\tin_tuc;
use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Relations\Relation;

class AppServiceProvider extends ServiceProvider
{
    protected $morphMaps = [
        HinhAnh::TYPE_TOUR => tour::class,
        HinhAnh::TYPE_TIN_TUC => tin_tuc::class,
    ];
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Relation::morphMap($this->morphMaps);
    }
}
