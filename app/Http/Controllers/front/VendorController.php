<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VendorController extends Controller
{
    public function vendordashboard()
    {
        return view('front.vendor-dashboard');
    }

    public function vendorprofile()
    {
        return view('front.vendor-profile');
    }
}
