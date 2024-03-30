<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pensiun;

class PensiunController extends Controller
{
    public function index()
    {
        $results = Pensiun::all();
        return view('datapensiun', compact('results'));
    }
}
