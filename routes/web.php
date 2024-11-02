<?php

use Illuminate\Support\Facades\Route;

/* david */

Route::get('/login', function () {
    return redirect(route('filament.admin.auth.login'));
})->name('login');
/* end david */


Route::get('/', function () {
    return view('welcome');
});
