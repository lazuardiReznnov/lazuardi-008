<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DashboardAbout;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index', [
            'title' => 'Dashboard ',
        ]);
    }

    public function about()
    {
        return view('dashboard.about', [
            'title' => 'About',
            'data' => DashboardAbout::first(),
        ]);
    }

    public function contac()
    {
        return view('dashboard.contac', [
            'title' => 'Contac',
        ]);
    }
}