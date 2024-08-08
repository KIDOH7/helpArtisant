<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArtisanDashboardController extends Controller
{
    public function index()
    {
        $artisan = Auth::guard('artisan')->user();

        return view('artisanss.dashboard', compact('artisan'));
    }
}
