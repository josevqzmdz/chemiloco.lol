<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class Controller
{
    // tbese are the controllers for each view
    public function english(): View
    {
        return view('english');
    }

    public function spanish(): View
    {
        return view('spanish');
    }

    public function french(): View
    {
        return view('french');
    }

    public function portuguese(): View
    {
        return view('portuguese');
    }
}
