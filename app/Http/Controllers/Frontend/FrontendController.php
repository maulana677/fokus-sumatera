<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Artikel;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $artikel = Artikel::all();
        return view('frontend.layouts.master', compact('artikel'));
    }
}
