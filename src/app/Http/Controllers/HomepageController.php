<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function showHome()
    {
        return view('pages.home');
    }
}
