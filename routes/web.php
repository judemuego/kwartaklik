<?php
use App\Http\Controllers\LocationController;

Route::get('/provinces/{region_id}', [LocationController::class, 'getProvinces']);
Route::get('/cities/{province_id}', [LocationController::class, 'getCities']);
Route::get('/barangays/{city_id}', [LocationController::class, 'getBarangays']);

Route::get('/', function () {
    return view('auth.login');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'profile'], function (){
    Route::get          ('/',                            'ProfileController@index'                          )->name('page');
    Route::get          ('/get',                         'ProfileController@get'                            )->name('get');
    Route::post         ('/save',                        'ProfileController@save'                           )->name('save');
    Route::get          ('/edit/{id}',                   'ProfileController@edit'                           )->name('reason');
    Route::post         ('/update/{id}',                 'ProfileController@update'                         )->name('update');
    Route::get          ('/destroy/{id}',                'ProfileController@destroy'                        )->name('destroy');
});

Route::group(['prefix' => 'badge'], function (){
    Route::get          ('/',                            'BadgeController@index'                          )->name('page');
    Route::get          ('/get',                         'BadgeController@get'                            )->name('get');
    Route::post         ('/save',                        'BadgeController@save'                           )->name('save');
    Route::get          ('/edit/{id}',                   'BadgeController@edit'                           )->name('reason');
    Route::post         ('/update/{id}',                 'BadgeController@update'                         )->name('update');
    Route::get          ('/destroy/{id}',                'BadgeController@destroy'                        )->name('destroy');
});

Route::group(['prefix' => 'point_transaction'], function (){
    Route::get          ('/sum',                         'PointTransactionController@sum'                          )->name('page');
});


Route::get('/dashboard', function () {
    return view('frontend.pages.overview');
});

Route::get('/tasks', function () {
    return view('frontend.pages.tasks');
});

Route::get('/events', function () {
    return view('frontend.pages.events');
});

Route::get('/marketplace', function () {
    return view('frontend.pages.marketplace');
});

Route::get('/timeline', function () {
    return view('frontend.pages.timeline');
});