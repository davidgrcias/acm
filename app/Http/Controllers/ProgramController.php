<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Program;
use App\Models\Gallery;
use App\Models\Testimony;
use App\Models\View;
use App\Models\View; // Pastikan model View sudah ada

class ProgramController extends Controller
{
    public function index()
    {
        $programs = Program::all();
        $testimonies = Testimony::all();
        $views = View::first();

        $backgroundImages = [
            asset('storage/' . $views->introduction_banner_1),
            asset('storage/' . $views->introduction_banner_2),
            asset('storage/' . $views->introduction_banner_3),
            asset('storage/' . $views->introduction_banner_4),
        ];
        return view('index', [
            'title' => 'Home',
            'programs' => $programs,
            'testimonies' => $testimonies,
            'views' => $views,
            'images' => $backgroundImages,
        ]);
    }
        // Mengambil data program
        $programs = Program::all();

        // Mengambil daftar gambar dari tabel Gallery
        $images = Gallery::pluck('image')->toArray();

        // Mengambil data testimonies
        $testimonies = Testimony::all();

        // Mengambil data gambar banner dari tabel views
        $view = View::first(); // Mengambil data pertama dari tabel 'views'

        return view('index', [
            'title' => 'Home',
            'programs' => $programs,
            'images' => $images,
            'testimonies' => $testimonies,
            'view' => $view // Menambahkan data view ke view
        ]);
    }

    public function show($id)
    {
        $program = Program::findOrFail($id);

        return view('programdetails', [
            'title' => $program->title,
            'program' => $program,
        ]);
    }
}
}
