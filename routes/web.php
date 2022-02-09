<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\home\HomeController;


//front controller
use App\Http\Controllers\front\AccountController;
use App\http\Controllers\front\FrontController;
use App\Http\Controllers\front\InvoiceController;
use App\http\Controllers\front\VendorController;
use App\Http\Controllers\front\PagesController;



use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\SliderController;
use App\Http\Controllers\admin\BannerController;

use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\AdminAuthController;
use App\Http\Controllers\admin\EmployeeController;
use App\Http\Controllers\admin\ClientController;
use App\Http\Controllers\admin\TrashedController;
use App\Http\Controllers\admin\TaskController;
use App\Http\Controllers\admin\AwardController;
use App\Http\Controllers\admin\TaskAssignController;
use App\Http\Controllers\admin\TaskStatus;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\HomeEditorController;
use App\Http\Controllers\admin\UrlListController;
use App\Http\Controllers\admin\UrlGroupController;
use App\Http\Controllers\admin\SettingController;
use App\Http\Controllers\admin\TestimonialController;
use App\Http\Controllers\admin\BlogController;
use App\Http\Controllers\admin\VideoController;
use App\Http\Controllers\admin\PageController;
use App\Http\Controllers\admin\BlockControlController;
use App\Http\Controllers\admin\ContactusController;
use App\Http\Controllers\admin\CustomCodeController;
use App\Http\Controllers\admin\CriteriaController;
use App\Http\Controllers\admin\InquiryController;
use App\Http\Controllers\admin\PhotoController;
use App\Http\Controllers\admin\InquiryFormController;

use App\Http\Controllers\admin\testController;
use App\Http\Controllers\front\ProductController as FrontProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::resources([
//     '/' => HomeController::class,    
// ]);

route::get('/', [FrontController::class, 'index'])->name('index');

route::get('about', [FrontController::class, 'about'])->name('about');
route::get('legal', [FrontController::class, 'legal'])->name('legal');
route::get('infrastructure', [FrontController::class, 'infrastructure'])->name('infrastructure');
route::get('award-recognization', [FrontController::class, 'award_recognization'])->name('award-recognization');
route::get('video', [FrontController::class, 'video'])->name('video');

route::get('service', [FrontController::class, 'service'])->name('service');
route::get('bank-detail', [FrontController::class, 'bankDetail'])->name('bank-detail');

route::get('login', [FrontController::class, 'login'])->name('login');
route::get('register', [FrontController::class, 'register'])->name('register');

route::get('vendordashboard', [VendorController::class, 'vendordashboard'])->name('vendordashboard');
route::get('vendorprofile', [VendorController::class, 'vendorprofile'])->name('vendorprofile');

route::get('search', [PagesController::class, 'search'])->name('search');
route::get('review', [PagesController::class, 'review'])->name('review');
route::get('lookbook', [PagesController::class, 'lookbook'])->name('lookbook');
route::get('sitemap', [PagesController::class, 'sitemap'])->name('sitemap');
route::get('commingsoon', [PagesController::class, 'commingsoon'])->name('commingsoon');
route::get('faq', [PagesController::class, 'faq'])->name('faq');

route::get('whishlist', [AccountController::class, 'wishlist'])->name('wishlist');
route::get('cart', [AccountController::class, 'cart'])->name('cart');
route::get('contact', [AccountController::class, 'contact'])->name('contact');

route::get('forgetpsw', [AccountController::class, 'forgetpsw'])->name('forgetpsw');
route::get('profile', [AccountController::class, 'profile'])->name('profile');
route::get('ordersuccess', [AccountController::class, 'ordersuccess'])->name('ordersuccess');
route::get('ordertrack', [AccountController::class, 'ordertrack'])->name('ordertrack');

route::get('invoice1', [InvoiceController::class, 'invoice1'])->name('invoice-1');
route::get('invoice2', [InvoiceController::class, 'invoice2'])->name('invoice-2');
route::get('invoice3', [InvoiceController::class, 'invoice3'])->name('invoice-3');
route::get('invoice4', [InvoiceController::class, 'invoice4'])->name('invoice-4');
route::get('invoice5', [InvoiceController::class, 'invoice5'])->name('invoice-5');

route::get('product-page', [FrontProductController::class, 'product'])->name('product-page');






//Admin

// Route::group(function(){

//     Route::resource('/admin',DashboardController::class);
// });

Route::post('/admin/register/save', [AdminAuthController::class, 'save'])->name('register.save');
Route::post('/admin/auth/check', [AdminAuthController::class, 'check'])->name('auth.check');

Route::get('/admin/auth/logout', [AdminAuthController::class, 'logout'])->name('auth.logout');

Route::get('/admin/login', [AdminAuthController::class, 'login'])->name('admin.login');
Route::get('/admin/register', [AdminAuthController::class, 'register']);

Route::get('/admin', [DashboardController::class, 'index'])->name('admin.index');

Route::group(['middleware' => ['AuthCheck']], function () {



    // Route::post('/admin/slider/update-status',[SliderController::class, 'update_list_no'])->name('slider.update-status');

    Route::resource('/admin/slider', SliderController::class);


    Route::get('/admin/block-control/top-inflatables', [BlockControlController::class, 'topInflatableCreate'])->name('topInflatable.create');
    Route::post('/admin/block-control/top-inflatables', [BlockControlController::class, 'topInflatableStore'])->name('topInflatable.store');
    Route::delete('/admin/block-control/delete', [BlockControlController::class, 'deleteBlockControl'])->name('blockControl.delete');

    Route::get('/admin/block-control/page-links', [BlockControlController::class, 'pageLinkCreate'])->name('pageLink.create');
    Route::post('/admin/block-control/page-links', [BlockControlController::class, 'pageLinkStore'])->name('pageLink.store');

    Route::post('/admin/block-control/page-links/update', [BlockControlController::class, 'pageLinkUpdate'])->name('pageLink.update');

    //common links form categories, products, Testimonials, Blog, etc

    Route::get('/admin/block-control/common-links/{pageType}', [BlockControlController::class, 'commonLinkCreate'])->name('commonLink.create');
    Route::post('/admin/block-control/common-links', [BlockControlController::class, 'commonLinkStore'])->name('commonLink.store');
    Route::post('/admin/block-control/common-links/update', [BlockControlController::class, 'commonLinkUpdate'])->name('commonLink.update');


    // Route::delete('/admin/block-control/delete',[BlockControlController::class, 'deleteBlockControl'])->name('blockControl.delete');



    Route::get('/admin/custom-code/js', [CustomCodeController::class, 'customJs'])->name('customJs.create');


    // Route::get('/admin/top-inflatable', [HomeEditorController::class, 'topInflatableCreate'])->name('top.inflatable');
    // Route::post('/admin/top-inflatable/store', [HomeEditorController::class, 'topInflatableStore'])->name('top.inflatable.store');

    Route::delete('/admin/top-inflatable/delete/{id}', [HomeEditorController::class, 'topInflatableDelete'])->name('top.inflatable.delete');

    Route::get('/admin/page-editor/about', [PageController::class, 'aboutPageEditor'])->name('about-page.editor');
    Route::get('/admin/page-editor/product', [PageController::class, 'productPageEditor'])->name('product-page.editor');
    Route::get('/admin/page-editor/testimonial', [PageController::class, 'testimonialPageEditor'])->name('testimonial-page.editor');
    Route::get('/admin/page-editor/video', [PageController::class, 'videoPageEditor'])->name('video-page.editor');
    Route::get('/admin/page-editor/blog', [PageController::class, 'blogPageEditor'])->name('blog-page.editor');
    Route::get('/admin/page-editor/contact', [PageController::class, 'contactPageEditor'])->name('contact-page.editor');

    Route::post('/admin/page-editor/store', [PageController::class, 'pageEditorStore'])->name('page-editor.store');


    Route::get('/admin/home-editor', [HomeEditorController::class, 'homeEditorIndex'])->name('home.editor');

    Route::post('/admin/about-store', [HomeEditorController::class, 'homeEditorAboutStore'])->name('about.store');

    Route::post('/admin/url-list1/store', [HomeEditorController::class, 'urlListStore1'])->name('url-list1.store');
    Route::delete('/admin/url-list1/delete/{id}', [HomeEditorController::class, 'urlListDelete1'])->name('url-list1.delete');

    Route::get('/admin/url-group', [UrlGroupController::class, 'UrlGroupIndex'])->name('url.group');
    Route::get('/admin/settings/social-media', [SettingController::class, 'socialMediaIndex'])->name('setting.social-media');
    Route::post('/admin/settings/social-media', [SettingController::class, 'socialMediaStore'])->name('setting.social-media.store');

    Route::get('/admin/settings/seo-manage', [SettingController::class, 'seoManageIndex'])->name('setting.seo-manage');
    Route::post('/admin/settings/seo-manage', [SettingController::class, 'seoManageStore'])->name('setting.seo-manage.store');
    Route::post('/admin/settings/seo-manage-image', [SettingController::class, 'seoManageImageStore'])->name('setting.seo-manage-images.store');



    // Route::resource('/admin/employee',EmployeeController::class);
    // Route::get('/admin/category/petaKacheriStore',[CategoryController::class, 'petaKacheriStore'])->name('admin.petaKacheriStore');
    Route::post('/admin/category/subCategoryStore', [CategoryController::class, 'subCategoryStore'])->name('admin.category.subCategoryStore');
    Route::post('/admin/category/subCategory2Store', [CategoryController::class, 'subCategory2Store'])->name('admin.category.subCategory2Store');

    Route::get('/admin/category/delete/{id}', [CategoryController::class, 'categoryDelete'])->name('admin.category.delete');

    Route::get('/admin/criteria/meta', [CriteriaController::class, 'criteriaMetaIndex'])->name('criteria.meta.index');

    Route::post('/admin/criteria/meta', [CriteriaController::class, 'criteriaMetaStore'])->name('criteria.meta.store');

    Route::get('/admin/criteria/meta/edit/{id}', [CriteriaController::class, 'criteriaMetaEdit'])->name('criteria.meta.edit');

    Route::post('/admin/criteria/meta/update', [CriteriaController::class, 'criteriaMetaUpdate'])->name('criteria.meta.update');
    Route::delete('/admin/criteria/meta/{id}', [CriteriaController::class, 'criteriaMetaDelete'])->name('criteria.meta.delete');




    Route::resources([
        '/admin/employee' => EmployeeController::class,
        '/admin/client' => ClientController::class,
        '/admin/task' => TaskController::class,
        '/admin/task-assign' => TaskAssignController::class,
        '/admin/product' => ProductController::class,
        '/admin/testimonials' => TestimonialController::class,
        '/admin/blog' => BlogController::class,
        '/admin/video' => VideoController::class,
        '/admin/custom-code' => CustomCodeController::class,
        '/admin/criteria' => CriteriaController::class,
        '/admin/contactus' => ContactusController::class,
        '/admin/inquiry' => InquiryController::class,
        '/admin/inquiry-form' => InquiryFormController::class,
        '/admin/banner' => BannerController::class,

        '/admin/banner' => BannerController::class,
        '/admin/award'=>AwardController::class,
    ]);


    // '/' => HomeController::class,

    Route::get('/admin', [DashboardController::class, 'index']);

    Route::get('/admin/product/image', [ProductController::class, 'productImage'])->name('admin.product.productImage');

    Route::get('/admin/product/image2', [ProductController::class, 'productImage2'])->name('admin.product.productImage2');


    Route::get('/admin/category', [CategoryController::class, 'index'])->name('admin.category');
    Route::get('/admin/category/create', [CategoryController::class, 'create'])->name('admin.category.create');
    Route::get('/admin/category/edit/{id}', [CategoryController::class, 'edit'])->name('admin.category.edit');
    Route::post('/admin/category/store', [CategoryController::class, 'store'])->name('admin.category.store');
    
    Route::get('/admin/award/photo/{id}', [AwardController::class, 'manage_photo'])->name('admin.manage-photo');
    Route::post('/admin/award/update/{id}', [AwardController::class, 'update'])->name('admin.update');

    Route::get('/admin/video/manage/{id}', [VideoController::class, 'manage_video'])->name('admin.manage-video');
    Route::post('/admin/video/update/{id}', [VideoController::class, 'update'])->name('admin.video.update');
    Route::post('/admin/category/update/{id}', [CategoryController::class, 'update'])->name('admin.category.update');

    Route::post('/admin/task-comment/store', [TaskAssignController::class, 'task_comment_store'])->name('admin.taskComment.store');
    Route::post('/admin/task-comment/delete/{id}', [TaskAssignController::class, 'task_comment_delete'])->name('admin.taskComment.delete');

    Route::post('/admin/task-status/update', [TaskAssignController::class, 'task_update_status'])->name('admin.task.update.status');

    Route::get('/admin/trashed/{table}', [TrashedController::class, 'index'])->name('admin.trashed');
    Route::delete('/admin/trashed/{table}/{id}', [TrashedController::class, 'destroy'])->name('admin.trashed.destroy');
    Route::get('/admin/trashed/restore/{table}/{id}', [TrashedController::class, 'restore'])->name('admin.trashed.restore');

    Route::get('/admin/dashboard2', [DashboardController::class, 'dashboard2'])->name('admin.dashboard2');
    Route::get('/admin/test', [DashboardController::class, 'test'])->name('admin.test');

    Route::get('/admin', [AdminAuthController::class, 'dashboard'])->name('admin.dashboard');

    Route::get('/admin/photo', [PhotoController::class, 'Index'])->name('admin.photo');
 });

// Route::resources([
//     '/admin' => DashboardController::class,
//     '/admin/slider2' => SliderController::class,
// ]);




// Route::get('about2', HomeController::class, name = >'about2');

// Route::resources([
//     '/about' => HomeController::class@about,
// ]);


// Route::get('/', 'admin\LocationController@destory')
// ->name('/');

// Route::get('/', 'PhotoController::class@index');

// Route::get('/home', 'home\HomeController@index')->name('home');	



route::get('/{mainCatSlug}', [FrontProductController::class, 'main_category_list']);
route::get('/{mainCatSlug}/{subCatSlug}', [FrontProductController::class, 'sub_category_list']);
route::get('/{mainCatSlug}/{subCatSlug}/{productSlug}', [FrontProductController::class, 'product_details']);


// route::post('/store', [ContactusController::class, 'store'])->name('store');
// route::post('/index', [ContactusController::class, 'index'])->name('contactus.index');


// Route::get('/product/{category}/{slug}', [HomeController::class, 'category_list']);
