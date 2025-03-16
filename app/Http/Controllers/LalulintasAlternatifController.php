<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class LalulintasAlternatifController extends Controller
{
    public function index() {
        $laluLintasImages = Image::where('type', 'lalulintas-alternatif')->orderBy('created_at', 'desc')->get();

        return view('admin.lalulintas-alternatif.index', compact('laluLintasImages'));
    }
}
