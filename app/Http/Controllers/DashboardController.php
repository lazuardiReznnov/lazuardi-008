<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        ]);
    }

    public function contac()
    {
        return view('dashboard.contac', [
            'title' => 'Contac',
        ]);
    }
}
