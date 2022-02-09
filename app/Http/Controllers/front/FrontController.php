<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\Slider;
use App\Models\admin\UrlList;
use App\Models\admin\Pages;
use App\Models\admin\Video;
use App\Models\admin\Blog;
use App\Models\admin\Testimonials;
use App\Models\admin\Client;
use App\Models\admin\Product;
use App\Models\admin\Media;
use App\Models\admin\award;
use App\Models\admin\Category;
use App\Models\admin\Banner;

class FrontController extends Controller
{
    public function index()
    {
        $data = [
            'sliders' => Slider::where(['type' => 'homePageSlider', 'status' => 1])->orderBy('slider_no')->get(),
            'categories' => Category::where(['status' => 1, 'parent_id' => 0])->orderBy('item_no')->get(),
            'topCategory1' => Category::where(['status' => 1, 'parent_id' => 0])->orderBy('id', 'DESC')->first(),
            'topCategory2' => Category::where(['status' => 1, 'parent_id' => 0])->orderBy('id', 'ASC')->first(),

            'homeBanner1' => Banner::where(['position' => 'home-banner-1'])->orderBy('id', 'DESC')->first(),
            'homeBanner2' => Banner::where(['position' => 'home-banner-2'])->orderBy('id', 'DESC')->first(),
            'homeBanner3' => Banner::where(['position' => 'home-banner-3'])->orderBy('id', 'DESC')->first(),
            'homeBanner4' => Banner::where(['position' => 'home-banner-4'])->orderBy('id', 'DESC')->first(),
            'homeBanner5' => Banner::where(['position' => 'home-banner-5'])->orderBy('id', 'DESC')->first(),
            'leftSidebar' => Banner::where(['position' => 'home-banner-5'])->orderBy('id', 'DESC')->first(),
        ];

        return view('front.index2', $data);
    }

    public function about()
    {
        return view('front.about');
    }

    public function service()
    {
        return view('front.service');
    }
    public function bankDetail()
    {
        return view('front.bank-detail');
    }

    public function legal()
    {
        return view('front.legal');
    }

    public function infrastructure()
    {
        return view('front.infrastructure');
    }
    public function award_recognization()
    {
        $data = [
            'awards' => award::all(),
        ];
        return view('front.award-recognization',$data);
    }
    public function video()
    {
        $data = [
            'videos' => video::all(),
        ];
        return view('front.video',$data);
    }

    public function login()
    {
        return view('front.login');
    }

    public function register()
    {
        return view('front.register');
    }
}
