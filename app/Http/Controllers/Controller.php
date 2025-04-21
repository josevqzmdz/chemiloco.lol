<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
/*
use App\Models\english;
use App\Models\french;
use App\Models\portuguese;
use App\Models\spanish;
*/
use Illuminate\Http\Request;

class Controller
{
    // tbese are the controllers for each view
    public function show(): View {
        return view('english');
    }
}
