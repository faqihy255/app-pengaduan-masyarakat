<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $var_nama = "faqih";
        return view('landing', compact('var_nama'));
    }
}
