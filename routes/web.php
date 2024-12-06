<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProgramController;

/* david */

Route::get('/login', function () {
    return redirect(route('filament.admin.auth.login'));
})->name('login');

Route::get('/', [ProgramController::class, 'index']);

use App\Http\Controllers\ActivityController;
/* end david */

Route::get('/program/{id}', [ProgramController::class, 'show'])->name('program.show');

Route::get('/about', function () {
    return view("about", ['title' => 'About Us']);
});

Route::get('/visimisi', function () {
    return view("visimisi", ['title' => 'Visi & Misi']);
});

Route::get('/activity', [ActivityController::class, 'activity']);

Route::get('/gallery', function () {
    return view("gallery", ['title' => 'Gallery']);
});
