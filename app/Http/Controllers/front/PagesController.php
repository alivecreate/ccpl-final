<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function search()
    {
        return view('front.search');
    }

    public function review()
    {
        return view('front.review');
    }

    public function lookbook()
    {
        return view('front.lookbook');
    }
    public function sitemap()
    {
        return view('front.sitemap');
    }
    public function commingsoon()
    {
        return view('front.coming-soon');
    }
    public function faq()
    {
        return view('front.faq');
    }
}
