<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function invoice1()
    {
        return view('front.invoice-1');
    }

    public function invoice2()
    {
        return view('front.invoice-2');
    }

    public function invoice3()
    {
        return view('front.invoice-3');
    }

    public function invoice4()
    {
        return view('front.invoice-4');
    }

    public function invoice5()
    {
        return view('front.invoice-5');
    }
}
