<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $images = Image::where('type', 'dashboard')->orderBy('order', 'asc')->get();
        return view('home', compact('images'));
    }

    public function posPengamanPublic() {
        $images = Image::where('type', 'pospam')->orderBy('order', 'asc')->get();
        return view('pos-pengamanan-mudik', compact('images'));
    }

    public function updateLaluLintas() {
        $images = Image::where('type', 'lalulintas-alternatif')->orderBy('order', 'asc')->get();
        return view('update-lalu-lintas', compact('images'));
    }

    public function layananMudik() {
        $images = Image::where('type', 'layanan-mudik')->orderBy('order', 'asc')->get();
        return view('layanan-mudik', compact('images'));
    }
}
