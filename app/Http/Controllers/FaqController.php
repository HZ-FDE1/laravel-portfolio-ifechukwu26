<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class FaqController extends Controller
{

    public function show():View
    {
        return view('faq');
    }
}
