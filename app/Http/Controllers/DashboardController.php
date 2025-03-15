<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        $dashboardImages = Image::getDashboardImages();
        $layananMudikImages = Image::getLayananMudikImages();

        return view('dashboard.index', compact('dashboardImages', 'layananMudikImages'));
    }
}
