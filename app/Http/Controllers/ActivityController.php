<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\News;

class ActivityController extends Controller
{
    public function activity()
    {
        $activities = News::where('status', 'Published')->get();
        $activitygalleries = Gallery::orderBy('order', 'asc')->paginate(9);

        return view('activity', [
            'activities' => $activities,
            'activitygalleries' => $activitygalleries,
            'title' => 'Our Activities'
        ]);
    }
}
