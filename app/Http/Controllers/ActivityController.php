<?php

namespace App\Http\Controllers;

use App\Models\Gallery;

class ActivityController extends Controller
{
    public function activity()
    {
        $activities = Gallery::all();
        return view('activity', ['activities' => $activities]);
    }
}
