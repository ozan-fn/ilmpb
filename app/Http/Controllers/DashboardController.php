<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        $dashboardImages = Image::getDashboardImages();

        return view('admin.dashboard.index', compact('dashboardImages'));
    }
}
