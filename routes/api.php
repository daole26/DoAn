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

Route::group(['namespace' => 'User', 'as' => 'api.'], function () {
    Route::post('comment/store', 'CommentController@store')->name('comment.store');
    Route::get('comment/load_more/{id}/{start}/{limit}', 'CommentController@loadMore')->name('comment.loadmore');
    Route::post('tour/booking', 'BookingController@store')->name('tour.booking');
    Route::get('tour/load_more', 'TourController@loadMore')->name('load_more_tour');
});
