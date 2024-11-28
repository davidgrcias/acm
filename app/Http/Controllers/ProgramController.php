<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Program;

class ProgramController extends Controller
{
    public function index()
    {
        $programs = Program::all(); // Retrieve programs from the database
        return view('index', ['title' => 'Home', 'programs' => $programs]);
    }
}
