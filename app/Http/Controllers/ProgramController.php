<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Program;
use App\Models\View;

class ProgramController extends Controller
{
    public function index()
    {
        $programs = Program::all(); // Retrieve programs from the database

        // Ambil data banner dari tabel `views`
        $viewData = View::select(
            'introduction_banner_1',
            'introduction_banner_2',
            'introduction_banner_3',
            'introduction_banner_4'
        )->first();

        // Filter banner yang tidak null
        $carouselImages = [];
        if ($viewData) {
            $carouselImages = array_filter([
                $viewData->introduction_banner_1,
                $viewData->introduction_banner_2,
                $viewData->introduction_banner_3,
                $viewData->introduction_banner_4,
            ]);
        }

        // Kirim data ke view
        return view('index', [
            'title' => 'Home',
            'programs' => $programs,
            'carouselImages' => $carouselImages,
        ]);
    }
}
