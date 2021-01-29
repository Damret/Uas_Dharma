<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'ProductController@index');
Route::get('/man', 'ProductController@man');
Route::get('/woman', 'ProductController@woman');

Route::prefix('admin')
    ->namespace('Admin')
    ->group(function() {
        Route::resource('/', 'DashboardController');
        Route::resource('/catalogue', 'CatalogueController');
    });

// login
Route::get('/login', 'LoginController@login');
Route::post('/login/auth', 'LoginController@auth');
Route::get('/logout', 'LoginController@logout');

Route::get('/admin', function () {
	if(session()->exists('admin')) {
		return view('pages.admin.dashboard');
    }
    else { return redirect('/login'); }
    return redirect('/login');
});

// Crud
Route::get('/pages/admin/season','CrudController@tampilmusim');
Route::get('/pages/admin/tambahmusim','CrudController@tambahmusim');
Route::get('/pages/admin/hapusmusim','CrudController@hapusmusim');
