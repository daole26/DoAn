<?php

//Admin
// Route::get('/admincp/home', function () {
// 	return view('admin.home');
// });

// ==============================================
// Group Admin
Route::get('admincp/login', ['as' => 'getLogin', 'uses' => 'Admin\AdminLoginController@getLogin']);
Route::post('admincp/login', ['as' => 'postLogin', 'uses' => 'Admin\AdminLoginController@postLogin']);
Route::get('admincp/logout', ['as' => 'getLogout', 'uses' => 'Admin\AdminLoginController@getLogout']);

Route::group(['middleware' => 'checkAdminLogin', 'prefix' => 'admincp', 'namespace' => 'Admin'], function(){

	Route::get('/', function() {
		return view('admin.home');
	})->name('admincp');

	Route::resource('danhmuc', 'DanhMucController')->except('destroy');
	Route::get('danhmuc/destroy/{slug}', 'DanhMucController@destroy')->name('danhmuc.destroy');

	Route::resource('user', 'AccountController')->except('destroy');
	Route::get('user/destroy/{id}', 'AccountController@destroy')->name('user.destroy');

    Route::resource('tour', 'TourController')->except('destroy');
    Route::resource('hinhthuc','HinhThucTourController')->except('destroy');
    Route::get('hinhthuc/destroy/{id}','HinhThucTourController@destroy')->name('hinhthuc.destroy');
    Route::resource('tour.comment', 'CommentController')->only(['index', 'destroy']);
	Route::get('tour/destroy/{slug}', 'TourController@destroy')->name('tour.destroy');

	Route::resource('khuyenmai','KhuyenMaiController')->except('destroy');
	Route::get('khuyenmai/destroy/{id}','KhuyenMaiController@destroy')->name('khuyenmai.destroy');

	Route::get('hotrotructuyen','HoTroTrucTuyenController@index')->name('hotro.index');
	Route::post('hotrotructuyen/store','HoTroTrucTuyenController@store')->name('hotro.store');
	Route::post('hotrotructuyen/update','HoTroTrucTuyenController@update')->name('hotro.update');
	Route::get('hotrotructuyen/destroy/{id}','HoTroTrucTuyenController@destroy')->name('hotro.destroy');

	Route::resource('dattour', 'DatTourController')->except('destroy');
	Route::get('dattour/destroy/{id}', 'DatTourController@destroy')->name('dattour.destroy');

	Route::get('tintuc','TinTucController@index')->name('tintuc.index');
	Route::get('tintuc/insert','TinTucController@insert')->name('tintuc.insert');
	Route::post('tintuc/insert','TinTucController@store')->name('tintuc.store');
	Route::get('tintuc/edit/{id}','TinTucController@edit')->name('tintuc.edit');
	Route::post('tintuc/edit','TinTucController@postEdit')->name('tintuc.postEdit');
	Route::get('tintuc/detail/{id}','TinTucController@detail')->name('tintuc.detail');
	Route::get('tintuc/delete/{id}','TinTucController@delete')->name('tintuc.delete');
	Route::get('lienhe','LienHeController@index')->name('lienhe.index');
	Route::get('lienhe/show/{id}','LienHeController@show')->name('lienhe.show');
	Route::get('lienhe/delete/{id}','LienHeController@destroy')->name('lienhe.destroy');
});

// ===============================================

//Public

Route::get('/home', 'HomeController@index')->name('home');
Route::get('activate/{token}', 'Auth\RegisterController@activate')
	->name('activate');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
	
Route::get('/', 'IndexController@index')->name('index');
Route::get('/tin-tuc/{slug}', 'IndexController@tintuc')->name('index.tintuc');

Route::get('/login', function(){
	return view('login');
})->name('login');

Route::get('/register', function(){
	return view('register');
});

Route::get('/news', 'TinTucController@trangTinTuc');
Route::get('/tintuc/loadmore/{table}/{start}/{limit}','TinTucController@loadmore');
Route::get('/khuyenmai','TinTucController@trangKhuyenMai');

Route::group(['namespace' => 'User'], function () {
    Route::get('search','SearchController@getSearch')->name('user.search');
});
Route::resource('tour','TourController',['as'=>'user'])->only(['index','show']);
Route::get('/danhmuc/{slug}','TourController@showWithDanhMuc')->name('tour.followdanhmuc');
Route::get('/detail/{slug}', 'TourController@show')->name('tour.detail');

Route::get('/food','TinTucController@trangAmThuc');

Route::get('/contact', function(){
	return view('contact');
});

Route::get('/dattour/{slug}','DatTourController@show')->middleware('checkLogin')->name('dattour');
Route::post('/xulydattour','DatTourController@dattour')->name('dattour.dattour');

Route::post('lienhe/store','LienHeController@store');

Auth::routes();