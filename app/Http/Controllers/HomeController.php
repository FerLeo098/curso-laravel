<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\View;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index() {
        return view('home.index');
    }
}
