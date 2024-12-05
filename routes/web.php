<?php

use Illuminate\Support\Facades\Route;
use App\Models\TeamMember;

/* david */

Route::get('/login', function () {
    return redirect(route('filament.admin.auth.login'));
})->name('login');
/* end david */


Route::get('/', function() {
    return view("index", ['title' => 'Home']);
});

Route::get('/about', function () {
    $teamMembers = TeamMember::orderBy('order')->get();
    return view('about', [
        'title' => 'About Us',
        'teamMembers' => $teamMembers,
    ]);
})->name('about');

Route::get('/visimisi', function() {
    return view("visimisi", ['title' => 'Visi & Misi']);
});

Route::get('/activity', function() {
    return view("activity", ['title' => 'Our Activity']);
});

Route::get('/gallery', function() {
    return view("gallery", ['title' => 'Gallery']);
});
