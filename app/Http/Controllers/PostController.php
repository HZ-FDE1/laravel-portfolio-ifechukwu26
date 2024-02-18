<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class PostController extends Controller
{

    public function index():View
    {
        return view('posts');
    }

    public function show():View
    {
        return view('posts');
    }
}
