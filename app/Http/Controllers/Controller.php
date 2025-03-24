<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class Controller
{
    //
    public function show(): View
    {
        return view('welcome');
    }
}
