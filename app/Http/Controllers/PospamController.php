<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class PospamController extends Controller
{
    public function index() {
        $pospamImages = Image::getPospamImages();

        return view('admin.pospam.index', compact('pospamImages'));
    }
}
