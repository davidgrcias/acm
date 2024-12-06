<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Program;
use App\Models\Gallery;
use App\Models\Testimony;
use App\Models\View;
use App\Models\Slider;

class ProgramController extends Controller
{
    public function index()
    {
        // Mengambil data program
        $programs = Program::all();

        // Mengambil daftar gambar dari tabel Gallery
        $images = Gallery::pluck('image')->toArray();

        // Mengambil data testimonies
        $testimonies = Testimony::all();

        // Mengambil data gambar banner dari tabel views
        $view = View::first();

        //mengambil data dari slider.php
        $slider = Slider::all();

        return view('index', [
            'title' => 'Home',
            'programs' => $programs,
            'images' => $images,
            'testimonies' => $testimonies,
            'slider' => $slider,
            'view' => $view,
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
