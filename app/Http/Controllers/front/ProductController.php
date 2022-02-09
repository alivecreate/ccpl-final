<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\Category;
use App\Models\admin\Slider;
use App\Models\admin\Banner;
use App\Models\admin\Media;
use App\Models\admin\Product;


use DB;

class ProductController extends Controller
{
    public function product()
    {
        return view('front.product-page');
    }

    public function main_category_list($mainCatSlug)
    {

        if($mainCatSlug == globalSlug()['led']){

        $currentCategory = Category::where(['slug' => $mainCatSlug, 'status' => 1])->first();
        $subCategories = Category::where(['parent_id' => $currentCategory->id, 'status' => 1])->get();

        $data = [
            'currentCategory' => $currentCategory,
            'subCategories' => $subCategories,
            'theme' => 'dark',

            'sliders' => Slider::where(['type' => 'ledPageSlider', 'status' => 1])->orderBy('slider_no')->get(),
            'categories' => Category::where(['status' => 1, 'parent_id' => 0])->orderBy('item_no')->get(),
            'topCategory1' => Category::where(['status' => 1, 'parent_id' => 0])->orderBy('id', 'DESC')->first(),
            'topCategory2' => Category::where(['status' => 1, 'parent_id' => 0])->orderBy('id', 'ASC')->first(),

            'homeBanner1' => Banner::where(['position' => 'home-banner-1'])->orderBy('id', 'DESC')->first(),
            'homeBanner2' => Banner::where(['position' => 'home-banner-2'])->orderBy('id', 'DESC')->first(),
            'homeBanner3' => Banner::where(['position' => 'home-banner-3'])->orderBy('id', 'DESC')->first(),
            'homeBanner4' => Banner::where(['position' => 'home-banner-4'])->orderBy('id', 'DESC')->first(),
            'homeBanner5' => Banner::where(['position' => 'home-banner-5'])->orderBy('id', 'DESC')->first(),
        
            'ledBannerBlock1' => Banner::where(['position' => 'left-banner-block1'])->orderBy('id', 'DESC')->first(),
        ];

        // dd($data);
            return view('front.led-manufacturing', $data);
        }

        $currentCategory = Category::where(['slug' => $mainCatSlug, 'status' => 1])->first();
        $subCategories = Category::where(['parent_id' => $currentCategory->id, 'status' => 1])->get();

        $data = [
            'currentCategory' => $currentCategory,
            'subCategories' => $subCategories,
        ];
        return view('front.category-list', $data);
    }

    public function sub_category_list($mainCatSlug, $subCatSlug)
    {
        $currentCategory = Category::where(['slug' => $subCatSlug, 'status' => 1])->first();
        $products = Product::where(['category_id' => $currentCategory->id, 'status' => 1])->get();

        $data = [
            'currentCategory' => $currentCategory,
            'products' => $products,
        ];
        return view('front.product-list', $data);
    }

    public function product_details($mainCatSlug, $subCatSlug, $productSlug)
    {
        $currentCategory = Category::where(['slug' => $subCatSlug, 'status' => 1])->first();
        $products = Product::where(['category_id' => $currentCategory->id, 'status' => 1])->get();
        $productdetails = Product::where(['slug' => $productSlug, 'status' => 1])->first();

        $data = [
            'currentCategory' => $currentCategory,
            'products' => $products,
            'productdetails' => $productdetails,
        ];
        return view('front.product-page', $data);
    }

    public function product_list()
    {
        $data = [
            'productlist' =>  Media::where('status', 1)->orderBy('item_id')->get(),
        ];
    }
}
