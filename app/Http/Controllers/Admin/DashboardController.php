<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $countkategori = Kategori::count();
        return view('admin.dashboard.index', compact('countkategori'));
    }
}
