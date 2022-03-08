<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;


Auth::routes();

Route::get('/admin', 'HomeController@index')->name('admin.dashboard.index');

Route::get('/', 'FrontEndController@home')->name('home');

// Front End Routes
Route::get('/blog', 'FrontEndController@blog')->name('pages.blog');
Route::get('/about', 'FrontEndController@about')->name('pages.about');
Route::get('/unlearn', 'FrontEndController@unlearn')->name('pages.unlearn');
Route::get('/resource', 'FrontEndController@resource')->name('pages.resource');
Route::get('/our-verticals', 'FrontEndController@verticals')->name('pages.verticals');
Route::get('/category/{slug}', 'FrontEndController@category')->name('website.category');
Route::get('/tag/{slug}', 'FrontEndController@tag')->name('website.tag');
Route::get('/contact', 'FrontEndController@contact')->name('pages.contact');
Route::get('/post/{slug}', 'FrontEndController@post')->name('pages.post');

// Form Controller
Route::get('/virtualpayment', 'FrontEndController@virtual')->name('pages.virtual');
Route::get('/physicalpayment', 'FrontEndController@physical')->name('pages.physical');


Route::any('verify-payment', 'PaymentController@verify')->name('verify');
Route::post('/payment', 'PaymentController@create_store')->name('pay.store');




Route::post('/contact', 'FrontEndController@send_message')->name('pages.contact');

// Admin Panel Routes
Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::get('/dashboard','DashboardController@index')->name('dashboard');

    Route::resource('category', 'CategoryController');
    Route::resource('tag', 'TagController');
    Route::resource('post', 'PostController');
    Route::resource('user', 'UserController');
    Route::get('/profile', 'UserController@profile')->name('user.profile');
    Route::post('/profile', 'UserController@profile_update')->name('user.profile.update');
    
    // setting
    Route::get('setting', 'SettingController@edit')->name('setting.index');
    Route::post('setting', 'SettingController@update')->name('setting.update');

    // Contact message
    Route::get('/contact', 'ContactController@index')->name('contact.index');
    Route::get('/contact/show/{id}', 'ContactController@show')->name('contact.show');
    Route::delete('/contact/delete/{id}', 'ContactController@destroy')->name('contact.destroy');
});
