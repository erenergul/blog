<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth')->except(['index']);
    }

    public function index()
    {
        return view('home.index');
    }
}
