<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\Category;
use App\Models\admin\Product;
use File;
use DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function __construct(){
    //     $this->parent_categories = category::where(['parent_id'=>0])->orderBy('id','DESC')->get();

    // }

    // public function index()
    // {
    //     // $data = ['parent_categories' =>  $this->parent_categories];
    //     // return view('adm.pages.product.index', $data);
    // }

    public function __construct()
    {
        $this->products = Product::orderBy('id', 'DESC')->get();
        $this->parent_categories = category::where(['parent_id' => 0])->orderBy('id', 'DESC')->get();
    }

    public function index()
    {
        $data = [
            'products' =>  $this->products,
            'parent_categories' =>  $this->parent_categories
        ];
        return view('adm.pages.product.index', $data);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        if (isset($request->category_id)) {
            $isProductAvailable = DB::table('products')->where('category_id', $request->subCategory)->first();
            $data = [
                'parent_categories' =>  $this->parent_categories,
                'selectedSubCategory' =>  getSubCategoryFromProduct($request->category_id),
                'selectedSubCategories' =>  getSubCategories(getMainCategoryFromProduct($request->category_id)->id, 0),
                'selectedMainCategory' =>  getMainCategoryFromProduct($request->category_id),
            ];
            return view('adm.pages.product.create', $data);
        } 

        $data = ['parent_categories' =>  $this->parent_categories];
        return view('adm.pages.product.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->input());
        if ($request->status) {
            $status = 1;
        } else {
            $status = 0;
        }


        $request->validate([
            'name' => 'required',
            'short_description' => 'required',
            'slug' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg',
            'sub_category_parent_id' => 'required',

        ]);

        $image_name = uploadImageThumb($request);
        $product = new Product;
        $product->name = $request->name;
        $product->short_description = $request->short_description;
        $product->full_description = $request->full_description;
        $product->image  = $image_name;
        $product->image_alt = $request->image_alt;
        $product->slug  = $request->slug;
        $product->meta_title  = $request->meta_title;
        $product->meta_keyword  = $request->meta_keyword;
        $product->meta_description  = $request->meta_description;

        $product->search_index = $request->search_index;
        $product->search_follow = $request->search_follow;
        $product->canonical_url = $request->canonical_url;

        $product->category_id  = $request->sub_category_parent_id;
        $product->status  = $status;
        $save = $product->save();

        // dd($task->id);

        if ($save) {
            // $taskStatus = new TaskStatus;
            // $taskStatus->status_id  = 1 ; 
            // $taskStatus->task_assign_id = $task->id;
            // $taskStatus->save();

            return (redirect(url('admin') . '/photo?page=manage&item_id=' . $product->id))->with('success', 'Product Added...');
        } else {
            return back()->with('fail', 'Something went wrong, try again later...');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        $data = [
            'product' =>  $product,
            'parent_categories' => $this->parent_categories
        ];

        if ($product) {
            return view('adm.pages.product.edit', $data);
        } else {
            return redirect(route('product.index'))->with('fail', 'Product Not Available...');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request->status);


        $request->validate([
            'name' => 'required',
            'short_description' => 'required',
            'slug' => 'required',
            'category_id' => 'required',
            'image' => 'image|mimes:jpg,png,jpeg|max:' . getMaxUploadSide(),


        ]);

        if ($request->file('image')) {
            $image_name = uploadImageThumb($request);
        } else {
            $image_name = $request->old_image;
        }

        if ($request->status) {
            $status = 1;
        } else {
            $status = 0;
        }


        $product =  Product::find($id);
        $product->name = $request->name;
        $product->short_description = $request->short_description;
        $product->full_description = $request->full_description;
        $product->image  = $image_name;
        $product->image_alt = $request->image_alt;
        $product->image_title  = $request->image_title;
        $product->slug  = $request->slug;
        $product->meta_title  = $request->meta_title;
        $product->meta_keyword  = $request->meta_keyword;
        $product->meta_description  = $request->meta_description;

        $product->search_index = $request->search_index;
        $product->search_follow = $request->search_follow;
        $product->canonical_url = $request->canonical_url;

        $product->category_id  = $request->category_id;
        $product->status  = $status;

        $save = $product->save();

        if ($save) {
            return back()->with('success', 'Product Updated...');
        } else {
            return back()->with('fail', 'Something went wrong, try again later...');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        if (File::exists(public_path('web') . '/media/lg/' . $product->image)) {
            unlink(public_path('web') . '/media/lg/' . $product->image);
            unlink(public_path('web') . '/media/md/' . $product->image);
            unlink(public_path('web') . '/media/sm/' . $product->image);
            unlink(public_path('web') . '/media/xs/' . $product->image);
            unlink(public_path('web') . '/media/icon/' . $product->image);

            deleteTableUrlData($product->id, 'product_link');
            $product = $product->delete();
            return back()->with('success', 'Product Deleted...');
        } else {
            deleteTableUrlData($product->id, 'product_link');
            $product = $product->delete();
            return back()->with('success', 'Product Deleted...');
        }
    }
}
