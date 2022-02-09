<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function wishlist()
    {
        return view('front.wishlist');
    }

    public function cart()
    {
        return view('front.cart');
    }

    public function contact()
    {
        return view('front.contact');
    }

    public function forgetpsw()
    {
        return view('front.forget_pwd');
    }

    public function profile()
    {
        return view('front.profile');
    }

    public function ordersuccess()
    {
        return view('front.order-success');
    }

    public function ordertrack()
    {
        return view('front.order-tracking');
    }
}
