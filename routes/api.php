<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['namespace' => 'user', 'as' => 'api.'], function () {
    Route::resource('comment', 'CommentController')->only(['store']);
    Route::get('comment/load_more', 'CommentController@loadMore')->name('load_more_comment');
    Route::post('tour/booking', 'BookingController@store')->name('tour.booking');
    Route::get('tour/load_more', 'TourController@loadMore')->name('load_more_tour');
});
