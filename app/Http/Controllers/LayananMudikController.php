<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class LayananMudikController extends Controller
{
    public function index() {
        $layananImages = Image::where('type', 'layanan-mudik')->orderBy('created_at', 'desc')->get();

        return view('admin.layanan-mudik.index', compact('layananImages'));
    }
}
