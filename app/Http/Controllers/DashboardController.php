<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
        $appointments = Auth::user()->appointments;
        return view('auth.dashboard', ['appointments'=>$appointments]);
    }
}
