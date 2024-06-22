<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontpages;

Route::group(
    [
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){
    // Your routes
   

Route::get('/madiha', function () {
    return view('test');
});

Route::get('/', [Frontpages::class, 'home'])->name('home');
Route::get('/portfolio-details', [Frontpages::class, 'portofolio'])->name('portfolio-details');
Route::get('/contact', [Frontpages::class, 'contact'])->name('contact');
Route::get('/error404', [Frontpages::class, 'errorPage'])->name('error404');
Route::get('/blog-single', [Frontpages::class, 'blog'])->name('blog-single');
Route::get('/doctors', [Frontpages::class, 'doctors'])->name('doctors');
Route::get('/services', [Frontpages::class, 'services'])->name('services');
Route::get('/bookAppointment', [Frontpages::class, 'appointment'])->name('bookAppointment');


});