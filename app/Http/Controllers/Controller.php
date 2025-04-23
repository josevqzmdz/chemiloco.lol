<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Routing\Controller as BaseController; 
/*
use App\Models\english;
use App\Models\french;
use App\Models\portuguese;
use App\Models\spanish;
*/
use Illuminate\Http\Request;

class Controller extends BaseController
{
    public function show(): View {
        return view('english');
    }

    public function showEnglish(): View {
        return view('english');
    }
    
    public function showFrench(): View {
        return view('french');
    }
    
    public function showSpanish(): View {
        return view('spanish');
    }
    
    public function showPortuguese(): View {
        return view('portuguese');
    }
}
