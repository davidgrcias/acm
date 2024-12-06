<?php

use Illuminate\Support\Facades\Route;
use App\Models\TeamMember;

/* david */

Route::get('/login', function () {
    return redirect(route('filament.admin.auth.login'));
})->name('login');

Route::get('/', [ProgramController::class, 'index']);

use App\Http\Controllers\ActivityController;

Route::get('/program/{id}', [ProgramController::class, 'show'])->name('program.show');

Route::get('/about', function () {
    $teamMembers = TeamMember::orderBy('order')->get();
    return view('about', [
        'title' => 'About Us',
        'teamMembers' => $teamMembers,
    ]);
})->name('about');

Route::get('/visimisi', function () {
    return view("visimisi", ['title' => 'Visi & Misi']);
});

Route::get('/activity', [ActivityController::class, 'activity']);

Route::get('/gallery', function () {
    return view("gallery", ['title' => 'Gallery']);
});
