<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Program;
use App\Models\Gallery;
use App\Models\Testimony;

class ProgramController extends Controller
{
    public function index()
    {
        $programs = Program::all();
        $images = Gallery::pluck('image')->toArray();
        $testimonies = Testimony::all(); 
        return view('index', ['title' => 'Home', 'programs' => $programs, 'images' => $images, 'testimonies' => $testimonies]);
    }
}
