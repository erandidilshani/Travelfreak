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

Route::get('/', function () {
    return view('pages.home1');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/map', function () {
    return view('pages.map');
});


Route::get('/login', function () {
    return view('pages.login');
});

Route::get('/forum', function () {
    return view('pages.forum');
});


Route::get('/registrations/driver', function () {
    return view('pages.registrations.driver_reg');
});

Route::get('/registrations/tourist', function () {
    return view('pages.registrations.tourist_reg');
});

Route::get('/registrations/guide', function () {
    return view('pages.registrations.guide_reg');
});

Route::get('/registrations/eqprovider', function () {
    return view('pages.registrations.eqp_reg');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth','gud']], function(){


    Route::get('/gudhome', function () {
        return view('pages.gudhome');
    });
    
    Route::get('/drvhome', function () {
        return view('pages.drvhome');
    });
    
    Route::get('/eqphome', function () {
        return view('pages.eqphome');
    });
    

});


Route::get('/serviceprovider/drveditdetails', function () {
    return view('serviceprovider.drvedit');
});

Route::get('/serviceprovider/gudeditdetails', function () {
    return view('serviceprovider.gudedit');
});

Route::get('/serviceprovider/eqpeditdetails', function () {
    return view('serviceprovider.eqpedit');
});

/*Route::get('/user_home' , function(){
    return view('pages.user_home');
}); */

Route::get('/driver_home' , function(){
    return view('pages.driver_home');
});

Route::get('/driver_profile' , function(){
    return view('pages.driver_profile');
});

Route::get('/guide_profile' , function(){
    return view('pages.guide_profile');
});
 
Route::get('/booking_form/guide_booking' , 'GuideBookingController@index');
Route::post('/booking_form/guide_booking' , 'GuideBookingController@create');

Route::get('/booking_form/driver_booking' , 'DriverBookingController@index');
Route::post('/booking_form/driver_booking' , 'DriverBookingController@create');


Route::get('/status' , function(){
    return view('tourist.status.waiting');
})->name('status'); 

Route::get('/feedback' , function(){
    return view('tourist.booking_form.feedback');
});

Route::get('/user_profile/user_profile_edit' , function(){
    return view('tourist.user_profile.user_profile_edit');
});

 