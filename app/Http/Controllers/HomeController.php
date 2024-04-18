<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function details()
    {
        return view('details');
    }
    public function index()
    {
        return view('index');
    }
}
