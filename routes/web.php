<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\ActivityController;
use App\Models\TeamMember;
use App\Models\History;
use App\Models\VisionMission;

Route::get('/', [ProgramController::class, 'navbar']);

Route::get('/login', function () {
    return redirect(route('filament.admin.auth.login'));
})->name('login');

Route::get('/', [ProgramController::class, 'index']);

/* end david */

Route::get('/program/{id}', [ProgramController::class, 'show'])->name('program.show');

Route::get('/about', function () {
    return view("about", ['title' => 'About Us']);
});
Route::get('/', function () {
    return view("index", ['title' => 'Home']);
});
// Route::get('/', function() {
//     return view("index", ['title' => 'Home']);
// });

Route::get('/', [ProgramController::class, 'index']);

Route::get('/about', function () {
    $history = History::orderBy('order', 'asc')->get();
    $teamMembers = TeamMember::orderBy('order')->get();
    $visi = VisionMission::where('category', 'vision')->orderBy('number')->get();
    $misi = VisionMission::where('category', 'mission')->orderBy('number')->get();
    return view('about', [
        'title' => 'About Us',
        'teamMembers' => $teamMembers,
        'history' => $history,
        'visi' => $visi,
        'misi' => $misi
    ]);
})->name('about');


Route::get('/program/{id}', [ProgramController::class, 'show'])->name('program.show');


Route::get('/visimisi', function () {
    return view("visimisi", ['title' => 'Visi & Misi']);
});

Route::get('/activity', [ActivityController::class, 'activity']);

Route::get('/activity/{id}', [ActivityController::class, 'show'])->name('activity.show');

Route::get('/gallery', function () {
    return view("gallery", ['title' => 'Gallery']);
});
