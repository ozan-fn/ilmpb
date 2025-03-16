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
        return view('pos-pengamanan-mudik');
    }

    public function updateLaluLintas() {
        return view('update-lalu-lintas');
    }

    public function layananMudik() {
        return view('layanan-mudik');
    }
}
