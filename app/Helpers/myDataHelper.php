<?php

use App\Models\admin\TaskComment;
use App\Models\admin\Category;
use App\Models\admin\SocialMedia;
use App\Models\admin\Product;
use App\Models\admin\Blog;
use App\Models\admin\Testimonials;
use App\Models\admin\Video;
use App\Models\admin\CustomCode;
use App\Models\admin\WebsiteOption;
use App\Models\admin\UrlList;
use App\Models\admin\CriteriaMeta;
use App\Models\admin\Media;


// use Illuminate\Support\Facades\DB;

function getWebsiteOptions()
{
    $data = [
        'website_logo' =>  WebsiteOption::where('option_name', 'logo')->first(),
        'website_favicon' =>  WebsiteOption::where('option_name', 'favicon')->first(),
        'theme_color' =>  'theme-color-3',
        'dark' => 'theme-color-5 dark dark-demo',
    ];
    return $data;
}

function globalSlug(){
    return $data= [
        'led' => 'led-Manufacturing'
    ];
}

function getProductsFromSubCategory($id, $limit = 0, $order = 'asc')
{


    if ($limit == 0) {
        return DB::table('products')->where('category_id', $id)->orderBy('item_no', $order)->first();
    } else {
        return DB::table('products')->where('category_id', $id)->orderBy('item_no', $order)->limit($limit)->get();
    }
    
}

function getMainCategoryFromSubCategory($parent_id)
{
    return DB::table('categories')->where('id', $parent_id)->first();
}

function getMainCategoryFromProduct($product_id)
{   
    $subcategory = DB::table('categories')->where('id', $product_id)->first();
    return DB::table('categories')->where('id', $subcategory->parent_id)->first();
}

function getSubCategoryFromProduct($product_id)
{   
    return DB::table('categories')->where('id', $product_id)->first();
}


function checkIsFileExist($location){
    // dd($location);
    // dd(public_path('web').'/media/sm/'.$sub_category->image);

    if(file_exists($location)){
        // if(File::exists($filename)) {
        // dd('yes');
        
        return true;
    }else{
        // dd('not');
        return false;
    }
}

function getYoutubeEmbed($url){
    
    $youtube = str_replace("https://www.youtube.com/watch?v=","https://www.youtube.com/embed/",$url);
    return $youtube;
}

function getYoutubeThumb($url){
    // $youtube = str_replace("","https://www.youtube.com/embed/",$url);
    // dd('test5bpp p -='. $youtube);

        // dd($url);

    $video_id = explode("?v=", $url);
    $youtube1 = "https://www.youtube.com/watch?v=";
    $youtube2 = "https://youtu.be/";
    $youtube3 = "https://www.youtube.com/embed/";
    $mystring = $url;

    // dd($url);
    if(strpos($mystring, $youtube1) !== false){
        $youtube = str_replace($youtube1,"",$url);
    }
    else if(strpos($mystring, $youtube2) !== false){
        $youtube = str_replace($youtube2,"",$url);
    }
    else if(strpos($mystring, $youtube3) !== false){
        $youtube = str_replace($youtube3,"",$url);
    }
    else{
        $youtube = null;
    }
    
    return ['url' => 'https://www.youtube.com/watch?v='.$youtube, 'thumb' => $youtube];
}

function getYouTubeVideoId($pageVideUrl) {
    $link = $pageVideUrl;
    $video_id = explode("?v=", $link);
    if (!isset($video_id[1])) {
        $video_id = explode("youtu.be/", $link);
    }
    $youtubeID = $video_id[1];
    if (empty($video_id[1])) $video_id = explode("/v/", $link);
    $video_id = explode("&", $video_id[1]);
    $youtubeVideoID = $video_id[0];
    if ($youtubeVideoID) {
        return $youtubeVideoID;
    } else {
        return false;
    }
}

function getMediaCount($id){
    return Media::where(['media_id'=> $id])->count();
}

function getYoutubeEmbedData($id, $limit = 1){
return Media::where(['media_id'=> $id])->where('youtube_embed','!=','null')->orderBy('item_no')->get();
}

function checkIsProductAvailable($id)
{
    return  DB::table('products')->where('category_id', $id)->count();
}

function getMedia($id, $limit = 0, $imageType, $order = 'DESC')
{
    // dd($id);
    if ($limit == 0) {
        // dd($id);
        return Media::where(['media_id' => $id, 'image_type'=>$imageType])->orderBy('item_no', $order)->get();
    } elseif ($limit == 1) {
        return Media::where(['media_id' => $id, 'image_type'=>$imageType])->orderBy('item_no', $order)->first();
    } else {
        // dd(Media::where(['media_id' => $id, 'image_type'=>$imageType])->limit($limit)->orderBy('item_no',$order)->get());

        return Media::where(['media_id' => $id, 'image_type'=>$imageType])->limit($limit)->orderBy('item_no', $order)->get();
    }
}
function getSubCategoryImages($id, $limit = 0, $order = 'DESC')
{
    // dd($id);
    if ($limit == 0) {
        // dd($id);
        return Media::where('media_id', $id)->orderBy('item_no', $order)->get();
    } elseif ($limit == 1) {
        return Media::where('media_id', $id)->orderBy('item_no', $order)->first();
    } else {
        // dd(Media::where('media_id', $id)->limit($limit)->orderBy('item_no',$order)->get());

        return Media::where('media_id', $id)->limit($limit)->orderBy('item_no', $order)->get();
    }
}


function getProductImages($id, $limit = 0, $order = 'asc')
{

    if ($limit == 0) {
        return Media::where('image_type', 'product')->where('media_id', $id)->orderBy('id', $order)->get();
    } else {
        return Media::where('image_type', 'product')->where('media_id', $id)->limit($limit)->orderBy('id', $order)->get();
    }
}

function getSeoOptions()
{

    $data = [
        'website_logo' =>  WebsiteOption::where('option_name', 'logo')->first(),
        'website_favicon' =>  WebsiteOption::where('option_name', 'favicon')->first(),
    ];
    return $data;
}

function getProductImageFromCategory($id, $limit)
{


    $subCategories = DB::table('categories')
        ->join('products', 'products.category_id', '=', 'categories.id')
        ->join('media', 'media.media_id', '=', 'products.id')

        // ->select('categories.name as name', 'url_list.name as display_name', 'categories.slug as slug',
        //         'url_list.item_id as item_id')

        ->where(['categories.parent_id' => $id])
        ->orderBy('media.id', 'DESC')->limit(8)->get();


    // dd($subCategories);
    return  $subCategories;
}



function getItemCount()
{
    $data = [
        'totalMainCategories' => Category::where('parent_id', 0)->count(),

        'totalSubCategories' => Category::whereNotIn('parent_id', [0])->count(),

        'totalProducts' => Product::count(),
        'totalBlogs' => Blog::count(),
        'totalTestimonials' => Testimonials::count(),
        'totalVideos' => Video::count(),
        'totalVideos' => Category::count(),

    ];
    return $data;
}


function getCustomCode()
{
    // TaskComment::where('admin_id', session('LoggedUser')->id);session('LoggedUser')->id

    $data = [
        'headerJs' =>  CustomCode::where('type', 'header-code')->first(),
        'footerJs' =>  CustomCode::where('type', 'footer-code')->first()
    ];

    return $data;
}

function getFooterLinks()
{
    $categoryLinks = DB::table('url_list')
        ->join('categories', 'categories.id', '=', 'url_list.item_id')
        ->where(['url_list.type' => 'category_link', 'categories.status' => 1, 'url_list.status' => 1])
        ->select(
            'categories.name as name',
            'url_list.name as display_name',
            'categories.slug as slug',
            'url_list.item_id as item_id'
        )
        ->orderBy('url_list.item_no')->limit(8)->get();

    $productLinks = DB::table('url_list')
        ->join('products', 'products.id', '=', 'url_list.item_id')
        ->where(['url_list.type' => 'product_link', 'products.status' => 1, 'url_list.status' => 1])
        ->select(
            'products.name as name',
            'url_list.name as display_name',
            'products.slug as slug',
            'url_list.item_id as item_id'
        )
        ->orderBy('url_list.item_no')->limit(8)->get();

    $blogLinks = DB::table('url_list')
        ->join('blogs', 'blogs.id', '=', 'url_list.item_id')
        ->where(['url_list.type' => 'blog_link', 'blogs.status' => 1, 'url_list.status' => 1])
        ->select(
            'blogs.title as name',
            'url_list.name as display_name',
            'blogs.slug as slug',
            'url_list.item_id as item_id'
        )
        ->orderBy('url_list.item_no')->limit(8)->get();


    // $testimonialLinks = DB::table('url_list')
    // ->join('testimonials', 'testimonials.id', '=', 'url_list.item_id')
    // ->where(['url_list.type' => 'testimonial_link', 'testimonials.status'=>1, 'url_list.status' => 1])
    // ->select('testimonials.title as name', 'url_list.name as display_name', 'testimonials.slug as slug',
    //         'url_list.item_id as item_id')
    // ->orderBy('url_list.item_no')->limit(8)->get();


    $testimonialLinks = DB::table('url_list')
        ->join('testimonials', 'testimonials.id', '=', 'url_list.item_id')
        // ->where(['url_list.type' => 'testimonial_link'])
        ->where(['url_list.type' => 'testimonial_link', 'testimonials.status' => 1, 'url_list.status' => 1])
        ->select(
            'testimonials.title as name',
            'url_list.name as display_name',
            'testimonials.slug as slug',
            'url_list.item_id as item_id'
        )

        ->orderBy('url_list.item_no')->limit(8)->get();



    $data = [
        'pageLinks' =>  UrlList::where(['type' => 'page_link', 'status' => 1])->orderBy('item_no')->get(),
        'categoryLinks' =>  $categoryLinks,
        'productLinks' =>  $productLinks,
        'blogLinks' =>  $blogLinks,
        'testimonialLinks' =>  $testimonialLinks
    ];
    return $data;
}

function getTaskComments()
{
    // TaskComment::where('admin_id', session('LoggedUser')->id);session('LoggedUser')->id

    $taskComments = DB::table('task_comments')
        ->join('task_assign', 'task_assign.id', '=', 'task_comments.task_assign_id')
        ->join('admins', 'admins.id', '=', 'task_comments.admin_id')
        ->join('task_status', 'task_status.task_assign_id', '=', 'task_comments.task_assign_id')
        ->join('status', 'status.id', '=', 'task_status.status_id')
        ->select(
            'task_assign.id as task_assign_id',
            'task_assign.description as task_assign_description',
            'admins.name as admin_name',
            'task_assign.description as task_assign_description',
            'task_comments.comment as comment',
            'task_comments.seen as comment_seen',
            'task_comments.seen_time as comment_seen_time',
            'task_comments.type as comment_type',
            'task_comments.created_at as comment_created_at',
            'status.name as status_name',
            'admins.image as admin_image'

        )
        ->where('task_comments.admin_id', '!=', session('LoggedUser')->id)
        ->where(['task_comments.seen' => 0])
        ->orderBy('task_comments.id', 'DESC')

        ->get();
    return $taskComments;
}

function getTaskAssign()
{
    $taskAssign = DB::table('task_assign')
        ->join('tasks', 'tasks.id', '=', 'task_assign.task_id')
        ->join('admins', 'admins.id', '=', 'task_assign.admin_id')
        ->join('categories', 'categories.id', '=', 'tasks.category_id')

        ->select(
            'task_assign.id as task_assign_id',
            'task_assign.description as task_description',
            'admins.name as admin_name',
            'admins.id as admin_id',
            'admins.image as admin_image',
            'task_assign.created_at as task_created_at',
            'tasks.name as task_name'

        )
        ->where('task_assign.admin_id', session('LoggedUser')->id)
        ->where(['task_assign.seen' => 0])
        ->orderBy('task_assign.id', 'DESC')

        ->get();

    return $taskAssign;
}



function checkIfCriteriaMetaDataDeleted($id, $table)
{

    // dd($id);

    $criteriaMeta = CriteriaMeta::whereRaw($table, [$id])->get();

    //    $criteriaMeta = CriteriaMeta::whereRaw('categories', [270])->get();

    //    dd($criteriaMeta);
    //    $products = CriteriaMeta::all();

    //    $products = DB::table($table)->where('id', $categoryArr)->count();
    // print_r($criteriaMeta);

    // dd($products);
    // echo 'helper';
    $arr = array();
    $res = array();

    if ($table == 'categories') {
        if (sizeof($res) == 0) {
            $criteriaMeta->categories = null;
        } else {
            $criteriaMeta->categories = implode(",", $res);
        }
    } elseif ($table == 'products') {

        if (sizeof($res) == 0) {
            $criteriaMeta->products = null;
        } else {
            $criteriaMeta->products = implode(",", $res);
        }
    }
}

function checkIfCriteriaMetaDataAvailable($id, $list, $table)
{

    $categoryArrs = explode(',', $list);
    $arr = array();
    $res = array();

    foreach ($categoryArrs as $categoryArr) {
        $check = DB::table($table)->where('id', $categoryArr)->count();
        $checkRes = DB::table($table)->where('id', $categoryArr)->first();
        if ($check != 0) {
            $res[] = $checkRes->id;
        }
    }
    $criteriaMeta = CriteriaMeta::where('id', $id)->first();
    if ($table == 'categories') {

        if (sizeof($res) == 0) {
            $criteriaMeta->categories = null;
        } else {
            $criteriaMeta->categories = implode(",", $res);
        }
    } elseif ($table == 'products') {

        if (sizeof($res) == 0) {
            $criteriaMeta->products = null;
        } else {
            $criteriaMeta->products = implode(",", $res);
        }
    }
    $criteriaMeta->save();
}

function getTaskStatus($id)
{

    $taskStatus = DB::table('status')->where('id', $id)->first();
    return $taskStatus;
}


function getSocialMedia()
{
    $data = SocialMedia::first();
    return $data;
}

function checkSlug($category, $slug)
{



    $checkSlugProduct = Product::where('slug', $slug)->first();
    $checkSlugCategory = Category::where('slug', $slug)->first();

    if ($checkSlugProduct) {
        // return 'product'.$allCategory;
        return $checkSlugProduct;
    } elseif ($checkSlugCategory) {

        $isExistParentCategory = Category::where('parent_id', $checkSlugCategory->id)->first();
        if ($isExistParentCategory) {

            return ['isExistParentCategory' => 'true', 'data' => $checkSlugCategory];
        } else {
            $productList = Product::where('category_id', $checkSlugCategory->id)->get();
            return ['isExistParentCategory' => 'false', 'data' => $productList];
        }
    } else {
        $allCategory = Category::where('slug', $slug)->get();

        return 'all category' . $allCategory;
    }
}

function getCategoryData($id)
{
    return DB::table('categories')->where(['id' => $id, 'status' => 1])->first();
}

function getProductData($id)
{
    return DB::table('products')->where('id', $id)->first();
}

function getMainCategories($skip = 0, $limit = null, $orderId = 'id', $order = 'asc', $except = 'none')
{
    if (isset($limit)) {
        return DB::table('categories')->where(['status' => 1, 'parent_id' => 0])->whereNotIn('slug',[$except])->orderBy($orderId, $order)
            ->skip($skip)->limit($limit)->get();
    } else {
        return DB::table('categories')->where(['status' => 1, 'parent_id' => 0])->orderBy($orderId, $order)
            ->get();
    }
}

function getSubCategories($id, $limit = 0)
{
    if ($limit == 0 || $limit == null) {
    $data = DB::table('categories')
            ->where(['parent_id' => $id, 'status' => 1])
            ->get();
        return $data;
    }
    else{
        $data = DB::table('categories')
        ->where(['parent_id' => $id, 'status' => 1])
        ->limit($limit)->get();
        return $data;
    }
}


function getTableFromType($type)
{

    switch ($type) {
        case 'testimonial_link':
            $table = 'testimonials';
            break;
        case 'video_link':
            $table = 'videos';
            break;

        case 'category_link':
            $table = 'categories';
            break;

        case 'blog_link':
            $table = 'blogs';
            break;

        case 'product_link':
            $table = 'products';
            break;

        default:
            return 'something went wrong, wrong table';
            break;
    }
    return $type;
}

function deleteUrlList($id, $type)
{

    DB::table('url_list')->where(['id' => $id, 'type' => getTableFromType($type)]);
}

function deleteTableUrlData($id, $type)
{
    DB::table('url_list')->where(['item_id' => $id, 'type' => $type])->delete();
}

function checkProductIsEXist($id)
{
    $products = DB::table('products')->where('category_id', $id)->get();
    // dd($products);
    if ($products) {
        foreach ($products as $product) {
            deleteBulkImage($product->image);
            $del = DB::table('products')->where('id', $product->id)->delete();
        }
    } else {
    }
}

function getDataObjects($table, $limit, $order)
{
    return DB::table($table)->orderBy('id', $order)->limit($limit)->get();
}


function getProductUrl($id)
{
    $url1 = DB::table('categories')->where('id', $id)->first();
    // dd($url1);
    if ($url1->parent_id == 0 && $url1->parent_id == null) {
        return $url1->slug;
    } else {
        $url2 = DB::table('categories')->where('id', $url1->parent_id)->first();
        if ($url2->parent_id == 0 && $url2->parent_id == null) {
            return $url2->slug . '/' . $url1->slug;
        } else {
            $url3 = DB::table('categories')->where('id', $url2->parent_id)->first();

            if (isset($url3)) {
                return $url3->slug . '/' . $url2->slug . '/' . $url1->slug;
            } else {
                return $url3->slug . '/' . $url2->slug . '/' . $url1->slug;
            }
        }
    }
    return DB::table('products')->where('id', $id)->first();
}
