<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QualityController extends Controller
{
    public function QualityDashboard(){
        return view('quality.quality_dashboard');
    }
}
