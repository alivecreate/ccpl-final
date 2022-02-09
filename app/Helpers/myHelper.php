<?php

use App\Models\admin\Category;
use App\Models\admin\Banner;

use Illuminate\Support\Facades\File;
// use File;

// dd(ini_get('post_max_size'));
function getMaxUploadSide()
{
    // dd(ini_get('post_max_size'));
    $maxSize = ini_get('upload_max_filesize');
    return substr($maxSize, 0, -1) * 1000 - 500;
}


function deleteBulkImage($image)
{
    // dd();
    if (isset($image)) {
        if (File::exists(public_path('web') . '/media/lg/' . $image)) {
            unlink(public_path('web') . '/media/lg/' . $image);
            unlink(public_path('web') . '/media/md/' . $image);
            unlink(public_path('web') . '/media/sm/' . $image);
            unlink(public_path('web') . '/media/xs/' . $image);
            unlink(public_path('web') . '/media/icon/' . $image);
        }
    }
}


function uploadAnyFile($request, $name, $saveName = null, $path = null)
{
    // dd($path);

    if ($request->file($name)) {
        $file = $request->file($name);
        $input['fileName'] = $saveName . '.' . $file->getClientOriginalExtension();

        $destinationPath = $path;

        $file->move($destinationPath, $input['fileName']);

        $fileName = $input['fileName'];
    } else {
        $fileName = null;
    }
    return $fileName;
}





function getCategory($id)
{

    return  DB::table('categories')->where('id', $id)->first();
}
function deleteChildCategory($id)
{
    $checkCategory = DB::table('categories')->where('id', $id)->first();
    // dd($checkCategory);

    if (isset($checkCategory)) {
        deleteBulkImage($checkCategory->image);
        DB::table('categories')->where('id', $id)->delete();
    }
}

// function getSubCategories(){
//     return  DB::table('categories')->where('parent_id', $id)->get(); 
// }

// Upload multiple images with thumbnails

function sliderTypeList(){
    return [
        'homePageSlider'=>'Home Page Slider',
        'ledPageSlider'=> 'LED Page Slider'
    ];
}

function imageBlockList(){
    return [
        'homeBanner1' => Banner::where(['position' => 'home-banner-1'])->orderBy('id', 'DESC')->first(),
        'homeBanner2' => Banner::where(['position' => 'home-banner-2'])->orderBy('id', 'DESC')->first(),
        'homeBanner3' => Banner::where(['position' => 'home-banner-3'])->orderBy('id', 'DESC')->first(),
        'homeBanner4' => Banner::where(['position' => 'home-banner-4'])->orderBy('id', 'DESC')->first(),
        'homeBanner5' => Banner::where(['position' => 'home-banner-5'])->orderBy('id', 'DESC')->first(),
        'leftSidebar' => Banner::where(['position' => 'left-banner-1'])->orderBy('id', 'DESC')->first(),
    ];
}

function uploadMultipleImageThumb($request)
{
    $imageArray = [];
    foreach ($request->file('image') as $index => $image) {
        // dd($image->extension());

        if ($image) {
            $input['imagename'] = time() . '_' . rand(111, 999) . '.' . $image->extension();
            if ($image->extension() == 'svg' || $image->extension() == 'JPG' || $image->extension() == 'webp') {
                //original image 
                $destinationPath = public_path('/web/media/md');
                $image->move($destinationPath, $input['imagename']);
                $image_name = $input['imagename'];
            } else {
                //icon image resize
                $destinationPath = public_path('/web/media/icon');
                $img_icon = Image::make($image->getRealPath());
                $img_icon->resize(60, 60, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($destinationPath . '/' . $input['imagename']);

                //xs image resize
                $destinationPath = public_path('/web/media/xs');
                $img_xs = Image::make($image->getRealPath());
                $img_xs->resize(150, 150, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($destinationPath . '/' . $input['imagename']);

                //sm image resize
                $destinationPath = public_path('/web/media/sm');
                $img_sm = Image::make($image->getRealPath());
                $img_sm->resize(300, 300, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($destinationPath . '/' . $input['imagename']);

                //md image resize
                $destinationPath = public_path('/web/media/md');
                $img_md = Image::make($image->getRealPath());
                $img_md->resize(600, 600, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($destinationPath . '/' . $input['imagename']);

                //original image 
                $destinationPath = public_path('/web/media/lg');
                $image->move($destinationPath, $input['imagename']);
                $image_name = $input['imagename'];
            }
        } else {
            $image_name = null;
        }
        $imageArray[] = $input['imagename'];
    }

    // dd($imageArray);
    return $imageArray;
}


function uploadMultipleImageThumb2($request)
{
    // dd($request->extension());

    $image = $request;

        if ($image) {
            $input['imagename'] = time() . '_' . rand(111, 999) . '.' . $image->extension();
            if ($image->extension() == 'svg' || $image->extension() == 'JPG' || $image->extension() == 'webp') {
                //original image 
                $destinationPath = public_path('/web/media/md');
                $image->move($destinationPath, $input['imagename']);
                $image_name = $input['imagename'];
            } else {
                //icon image resize
                $destinationPath = public_path('/web/media/icon');
                $img_icon = Image::make($image->getRealPath());
                $img_icon->resize(60, 60, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($destinationPath . '/' . $input['imagename']);

                //xs image resize
                $destinationPath = public_path('/web/media/xs');
                $img_xs = Image::make($image->getRealPath());
                $img_xs->resize(150, 150, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($destinationPath . '/' . $input['imagename']);

                //sm image resize
                $destinationPath = public_path('/web/media/sm');
                $img_sm = Image::make($image->getRealPath());
                $img_sm->resize(300, 300, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($destinationPath . '/' . $input['imagename']);

                //md image resize
                $destinationPath = public_path('/web/media/md');
                $img_md = Image::make($image->getRealPath());
                $img_md->resize(600, 600, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($destinationPath . '/' . $input['imagename']);

                //original image 
                $destinationPath = public_path('/web/media/lg');
                $image->move($destinationPath, $input['imagename']);
                $image_name = $input['imagename'];
            }
        } else {
            $image_name = null;
        }
        $imageArray = $input['imagename'];

    // dd($imageArray);

    return $imageArray;
}


function uploadImageThumb($request)
{

    if ($request->file('image')) {
        $image = $request->file('image');
        // dd($image);
        $input['imagename'] = time() . '_' . rand(111, 999) . '.' . $image->extension();

        //icon image resize
        $destinationPath = public_path('/web/media/icon');
        $img_icon = Image::make($image->getRealPath());
        $img_icon->resize(60, 60, function ($constraint) {
            $constraint->aspectRatio();
        })->save($destinationPath . '/' . $input['imagename']);

        //xs image resize
        $destinationPath = public_path('/web/media/xs');
        $img_xs = Image::make($image->getRealPath());
        $img_xs->resize(150, 150, function ($constraint) {
            $constraint->aspectRatio();
        })->save($destinationPath . '/' . $input['imagename']);

        //sm image resize
        $destinationPath = public_path('/web/media/sm');
        $img_sm = Image::make($image->getRealPath());
        $img_sm->resize(300, 300, function ($constraint) {
            $constraint->aspectRatio();
        })->save($destinationPath . '/' . $input['imagename']);

        //md image resize
        $destinationPath = public_path('/web/media/md');
        $img_md = Image::make($image->getRealPath());
        $img_md->resize(600, 600, function ($constraint) {
            $constraint->aspectRatio();
        })->save($destinationPath . '/' . $input['imagename']);

        //original image 
        $destinationPath = public_path('/web/media/lg');
        $image->move($destinationPath, $input['imagename']);
        $image_name = $input['imagename'];
    } else {
        $image_name = null;
    }
    return $image_name;
}



function today_date()
{
    return date("d/m/Y");
}


function dateToDay($date)
{
    $now = \Carbon\Carbon::now()->format('Y-m-d H:s:i');

    $fromFormat = \Carbon\Carbon::parse($date)->format('Y-m-d H:s:i');

    $to = \Carbon\Carbon::createFromFormat('Y-m-d H:s:i', $now);
    $from = \Carbon\Carbon::createFromFormat('Y-m-d H:s:i', $fromFormat);

    $diff_in_minutes = $from->diffInMinutes($to);
    return $diff_in_minutes;
}

function dateToDayCalculate($date)
{

    $now = \Carbon\Carbon::now()->format('Y-m-d H:s:i');
    $fromFormat = \Carbon\Carbon::parse($date)->format('Y-m-d H:s:i');

    $to = \Carbon\Carbon::createFromFormat('Y-m-d H:s:i', $now);
    $from = \Carbon\Carbon::createFromFormat('Y-m-d H:s:i', $fromFormat);

    $diff_in_minutes = $from->diffInMinutes($to);

    if ($diff_in_minutes == 0) {
        return $diff_in_minutes . ' Minute Ago';
    } elseif ($diff_in_minutes > 0 && $diff_in_minutes <= 59) {
        return $diff_in_minutes . ' Minutes Ago';
    } elseif ($diff_in_minutes > 60) {
        $hours = floor($diff_in_minutes / 60);

        if ($hours <= 24) {
            return $hours = floor($diff_in_minutes / 60) . ':' . ($diff_in_minutes -   floor($diff_in_minutes / 60) * 60) . ' Hours Ago';
        } else {
            return $days = floor($hours / 24) . ' Days Ago';
        }
    }
}

function dateFormat($date, $format)
{
    return \Carbon\Carbon::parse($date)->format($format);
}

function dateFormatGujDay($date, $format)
{
    $day = \Carbon\Carbon::parse($date)->format($format);
    if ($day == 'Monday') {
        return 'સોમવાર';
    } elseif ($day == 'Tuesday') {
        return 'મંગળવાર';
    } elseif ($day == 'Wednesday') {
        return 'બુધવાર';
    } elseif ($day == 'Thursday') {
        return 'ગુરુવાર';
    } elseif ($day == 'Friday') {
        return 'શુક્રવાર';
    } elseif ($day == 'Saturday') {
        return 'શનિવાર';
    } else {
        return 'રવિવાર';
    }
}


function getStatusBgColor($status)
{
    if ($status == 'pending') {
        return 'bg-warning';
    } elseif ($status == 'processing') {
        return 'bg-info';
    } elseif ($status == 'cancelled') {
        return 'bg-danger';
    } elseif ($status == 'completed') {
        return 'bg-success';
    } else {
        return 'bg-default';
    }
}

function subCategoryCheckProduct($id)
{
    // dd($id);
    $cat =  DB::table('categories')->where('parent_id', $id)->get();
    // dd($cat);
    $check = DB::table('categories')
        ->join('products', 'products.category_id', '=', 'categories.id')

        ->get();
    // dd($check);

    // $check =  DB::table('categories')->where('category_id', $id)->get();
}

// function checkIsProductAvailable($category_id)
// {
//     $check =  DB::table('products')->where('category_id', $category_id)->first();
//     if ($check) {
//         return true;
//     } else {
//         return false;
//     }
// }


function getStatusBadgeColor($status)
{
    if ($status == 'pending') {
        return 'badge bg-warning';
    } elseif ($status == 'processing') {
        return 'badge bg-info';
    } elseif ($status == 'cancelled') {
        return 'badge bg-danger';
    } elseif ($status == 'completed') {
        return 'badge bg-success';
    } else {
        return 'badge bg-default';
    }
}

function getStatusTextColor($status)
{
    if ($status == 'pending') {
        return 'text-warning';
    } elseif ($status == 'processing') {
        return 'text-info';
    } elseif ($status == 'cancelled') {
        return 'text-danger';
    } elseif ($status == 'completed') {
        return 'text-success';
    } else {
        return 'text-default';
    }
}

function test1()
{
    dd('testing helper');
}

function sendMailNotification($type, $to = 'sales@giantinflatables.in', $title, $data = [])
{
    // dd($data);
    $user['to'] = $to;
    $user['email'] = $data['email'];
    $user['name'] = $data['name'];

    switch ($type) {
        case 'contact_inquiry':
            $user['subject']  = $data['name'] . ' has contacted Giant Inflatables';
            break;

        case 'enquire':
            $user['subject']  = $data['name'] . ' has contacted Giant Inflatables';
            $user['formView'] = 'mail/send-inquiry';
            break;

        default:
            $user['subject']  = 'Admin Mailer - ' . $data['name'];
            $user['formView'] = 'mail/send-notification';
            break;
    }
    if ($type == 'enquire') {
        $formView = 'mail/send-inquiry';
    } else {
        $formView = 'mail/send-notification';
    }


    try {

        Mail::send('mail/thankyou-notification', $data, function ($message) use ($user) {
            $message->to($user['email']);
            $message->subject('Thank you for contacting us.');
            $message->replyTo($user['to']);
        });

        Mail::send($formView, $data, function ($message) use ($user) {
            $message->to($user['to']);
            $message->subject($user['subject']);
            $message->replyTo($user['email']);
        });
    } catch (\Exception $e) {

        Mail::send($formView, $data, function ($message) use ($user) {
            $message->to($user['to']);
            $message->subject($user['subject']);
            $message->replyTo($user['email']);
        });

        //Below code is for email errors
        // Mail::send('mail/failed-mail', $data, function($message) use ($user){
        //     $message->to($user['to']);
        //     $message->subject('Alert - Invalid form entry.');
        // });

        return 'err';
    }
}



function getParent($id)
{

    $category = Category::find($id);
    if ($category == null) {
        return ['parent_id' => 0];
    } else {
        return $category;
    }
}


function getReffrel()
{
    if (isset($_SERVER['HTTP_REFERER'])) {
        $link = $_SERVER['HTTP_REFERER'];
        $explodedLink = explode('/', $_SERVER['HTTP_REFERER']);

        $slug = end($explodedLink);
        $category = DB::table('categories')->where('slug', $slug)->first();

        if (isset($category)) {
            // dd($category);
            if ($category->name) {
                $name = $category->name;
            } else {
                $name = null;
            }
            return ['name' => $name, 'url' => $link];

            // dd(['name' => $category->name, 'url' => $link]);

        } else {
            if ($slug == 'about') {
                return ['name' => 'About Us', 'url' => $link];
            } elseif ($slug == 'about') {
                return ['name' => 'About Us', 'url' => $link];
            } elseif ($slug == 'products') {
                return ['name' => 'Products', 'url' => $link];
            } elseif ($slug == 'testimonials') {
                return ['name' => 'Testimonials', 'url' => $link];
            } elseif ($slug == 'videos') {
                return ['name' => 'Videos', 'url' => $link];
            } elseif ($slug == 'contact-us') {
                return ['name' => 'Contact Us', 'url' => $link];
            } elseif ($slug == 'blog') {
                return ['name' => 'Blog', 'url' => $link];
            } elseif ($slug == 'blog') {
                return ['name' => 'Blog', 'url' => $link];
            } else {
                return null;
            }
        }
    }
}

function getParentCategory($id)
{
    $category = Category::find($id);

    if (isset($id)) {
        if (isset($category->parent_id) && $category->parent_id == 0) {
            return (['category' => $category, 'subcategory' => null, 'subcategory2' => null]);
        } else {
            $subcategory = Category::find($category['parent_id']);
            if (isset($subcategory)) {
                if ($subcategory->parent_id == 0) {
                    return (['category' => $subcategory, 'subcategory' => $category, 'subcategory2' => null]);
                } else {
                    $subcategory2 = Category::find($subcategory->parent_id);
                    return (['category' => $subcategory2, 'subcategory' => $subcategory, 'subcategory2' => $category]);
                }
            } else {
                return (['category' => $subcategory, 'subcategory' => $category, 'subcategory2' => null]);
            }
        }
    } else {
        return (['category' => null, 'subcategory' => null, 'subcategory2' => null]);
    }
}


// function getParentCategory($id){
//     $category = Category::find($id);

//     if(isset($id)){
//         if($category->parent_id == 0){

//             return (['category'=>$category, 'subcategory' => null, 'subcategory2' => null]);

//         }
//         else{
//             $subcategory = Category::find($category->parent_id);
//             if($subcategory->parent_id == 0){
//                 return (['category'=>$subcategory, 'subcategory' => $category, 'subcategory2' => null]);
//             }else{
//             $subcategory2 = Category::find($subcategory->parent_id);
//                 return(['category'=>$subcategory2, 'subcategory' => $subcategory, 'subcategory2' => $category]);
//             }
//         }
//     }else{
//         return(['category'=>null, 'subcategory' => null, 'subcategory2' => null]);
//     }
// }

function getChildCategory($id)
{
    // $check
    $category = Category::find($id);
    if (isset($id)) {
        if ($category->parent_id == 0) {

            return (['category' => $category, 'subcategory' => null, 'subcategory2' => null]);
        } else {
            $subcategory = Category::find($category->parent_id);
            if ($subcategory->parent_id == 0) {
                return (['category' => $subcategory, 'subcategory' => $category, 'subcategory2' => null]);
            } else {
                $subcategory2 = Category::find($subcategory->parent_id);
                return (['category' => $subcategory2, 'subcategory' => $subcategory, 'subcategory2' => $category]);
            }
        }
    } else {
        return (['category' => null, 'subcategory' => null, 'subcategory2' => null]);
    }
}

function getChildCategoryCount($id)
{
    $subCategory = Category::where('parent_id', $id)->get();
}



function getMainCategory($id)
{
    $isMain = Category::where('id', $id)->first();

    if ($isMain->parent_id == 0) {
        return ['mainCat' => Category::where('id', $id)->first()];
    } else {
        $subCat = Category::where('id', $id)->first();
        $mainCat = Category::where('id', $subCat->parent_id)->first();
        return ['mainCat' => $mainCat, 'subCat' => $subCat];
    }
}

function getTableData($table, $id)
{
    return DB::table($table)->where('id', $id)->first();
}
