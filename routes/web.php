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
	Route::get('tour/destroy/{slug}', 'TourController@destroy')->name('tour.destroy');

	Route::resource('dattour', 'DatTourController')->except('destroy');
	Route::get('dattour/destroy/{id}', 'DatTourController@destroy')->name('dattour.destroy');

});

// ===============================================

//Public

Route::get('/home', 'HomeController@index')->name('home');
Route::get('activate/{token}', 'Auth\RegisterController@activate')
	->name('activate');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
	
Route::get('/', function(){
	return view('index');
});

Route::get('/login', function(){
	return view('login');
});

Route::get('/register', function(){
	return view('register');
});

Route::get('/news', function(){
	return view('news');
});

Route::get('/tour', function(){
	return view('tour');
});

Route::get('/booking', function(){
	return view('booking');
});

Route::get('/food', function(){
	return view('food');
});

Route::get('/contact', function(){
	return view('contact');
});

Route::get('/details', function(){
	return view('details');
});

Auth::routes();

