<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HrController extends Controller
{
    public function HrDashboard(){
        return view('hr.hr_dashboard');
    }
}
