<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\CategoryController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\api\MediaApiController;

use App\Http\Controllers\api\SliderController;
use App\Http\Controllers\api\ItemPriorityController;
use App\Http\Controllers\api\StatusController;
use App\Http\Controllers\api\ApiCallController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
    
});

Route::get('media/get-media',[MediaApiController::class, 'index']);
Route::get('media/get-product-images/{mediaId}',[MediaApiController::class, 'getProductImages']);

Route::post('media/media-store',[MediaApiController::class, 'mediaStore']);


Route::post('media/update-product-image',[MediaApiController::class, 'updateProductImage']);

Route::get('media/media-delete/{id}',[MediaApiController::class, 'mediaDelete']);
Route::post('media/update-image-data',[MediaApiController::class, 'updateImageData']);

Route::post('media/upload-multiple-image',[ApiCallController::class, 'UploadMultipleImage'])->name('upload.multiple-image');

Route::post('media/update-multiple-image-field/{id}',[ApiCallController::class, 'updateMultipleImageField'])->name('update.multiple-image-field');



// Route::get('get/getPetaKacheri/{id}','api\CategoryApiController@getPetaKacheri');

Route::resource('photos.comments', PhotoController::class);

Route::get('get/getPetaKacheri/{id}',[CategoryController::class, 'getPetaKacheri']);
Route::get('get/getProducts/{id}',[CategoryController::class, 'getProducts']);

Route::get('get/getSubCategories/{id}',[CategoryController::class, 'getSubCategories']);

Route::get('get/getSubcategoriesNoProducts/{id}',[CategoryController::class, 'getSubcategoriesNoProducts']);


Route::get('get/getDepartment/{id}',[CategoryController::class, 'getDepartment']);

// Route::post('admin/slider/update-list',[MediaApiController::class, 'updateProductImage']);

// Item No Update wia drag nd drop

Route::post('/admin/slider/update-status',[SliderController::class, 'update_list_no'])->name('slider.update-status');
Route::post('/admin/item/update-item-priority',[ItemPriorityController::class, 'updateItemNo'])->name('item.update-priority');


//Update Status

Route::post('/admin/update-status',[StatusController::class, 'updateStatus'])->name('status.update');

Route::post('/admin/item-bulk-delete',[ItemPriorityController::class, 'ItemBulkDelete'])->name('item.bulk-delete');

Route::post('/admin/send-contact',[ApiCallController::class, 'sendContact'])->name('send-contact');
Route::post('/admin/send-enquiry',[ApiCallController::class, 'sendContactEnquiry'])->name('send-enquiry');
Route::get('/test-mail',[ApiCallController::class, 'testMail'])->name('test-mail');



// Route::get('/products/item-bulk-delete/no',[ItemPriorityController::class, 'ItemBulkDeleteNo'])->name('item.bulk-delete');


// Route::post('/admin/category/departmentStore', [CategoryController::class, 'departmentStore'])->name('admin.category.departmentStore');



