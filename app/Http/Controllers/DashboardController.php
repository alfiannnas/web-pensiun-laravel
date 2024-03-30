<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        if (auth()->check()) {
            // User is authenticated, show dashboard
            return view('dashboard');
        } else {
            // User is not authenticated, redirect to login
            return redirect()->route('login');
        }
    }
}
