<?php

use Illuminate\Support\Facades\Route;

/* david */

Route::get('/login', function () {
    return redirect(route('filament.admin.auth.login'));
})->name('login');
/* end david */

Route::get('/', function() {
    return view("index", ['title' => 'Home']);
});

Route::get('/about', function() {
    return view("about", ['title' => 'About Us']);
});

Route::get('/visimisi', function() {
    return view("visimisi", ['title' => 'Visi & Misi']);
});

Route::get('/activity', [ActivityController::class, 'activity']);

Route::get('/gallery', function() {
    return view("gallery", ['title' => 'Gallery']);
});

