<?php

namespace App\Http\Controllers\api;


use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;
use App\Models\admin\Media;
use Image;
use File;
use DB; 
// use Illuminate\Support\Facades\Auth;

use Auth;


class MediaApiController extends Controller
{
    public function index(){
        header("Access-Control-Allow-Origin: *");
        
        // $result = Media::paginate(10);
        // return $result;
        // // return Media::all();
        
        $getPosts = DB::table('media')
        ->orderBy('media.id','desc')
        ->get();

        return response()->json($getPosts);

    }
    public function mediaStore(Request $request){
        // dd($request->input());
        $image = $request->file('images');
            
        $input['imagename'] = time().'_'.rand(1111,9999).'.'.$image->extension();
        
        //icon images resize
        // $destinationPath = public_path('../../public_html/web/media/icon');
        $destinationPath = public_path('/web/media/icon');
        $img_icon = Image::make($image->path());
        $img_icon->resize(60, 60, function ($constraint) {
            $constraint->aspectRatio();
        })->save($destinationPath.'/'.$input['imagename']);
        
        //xs images resize
        $destinationPath = public_path('/web/media/xs');
        $img_xs = Image::make($image->path());
        $img_xs->resize(150, 150, function ($constraint) {
            $constraint->aspectRatio();
        })->save($destinationPath.'/'.$input['imagename']);
        
        //sm images resize
        $destinationPath = public_path('/web/media/sm');
        $img_sm = Image::make($image->path());
        $img_sm->resize(300, 300, function ($constraint) {
            $constraint->aspectRatio();
        })->save($destinationPath.'/'.$input['imagename']);
        
        //md images resize
        $destinationPath = public_path('/web/media/md');
        $img_md = Image::make($image->path());
        $img_md->resize(600, 600, function ($constraint) {
            $constraint->aspectRatio();
        })->save($destinationPath.'/'.$input['imagename']);
   
        //original image 
        $destinationPath = public_path('/web/media/lg');
        $image->move($destinationPath, $input['imagename']);
                    
            $media_id = 'med_'.mt_rand(1000, 9999).mt_rand(50000,99999);

                $media = new Media;
                $media->media_id = $request->media_id;
                // $media->image_type = $request->image_type;
                // $media->image_alt = $request->image_alt;
                // $media->image_title = $request->image_title;
                // $media->image_desc = $request->image_desc;
                $media->image_type = 'product';
                $media->image = $input['imagename'];
                if($media->save()){        
                    return url('web').'/media/icon/'.$input['imagename'];
                }else{
                    return 'something went wrong, try again later.';

                }
        
    }
    public function mediaDelete(Request $request){
        $media = Media::find($request->id);
        if($media){
            if(File::exists(public_path('web').'/media/lg/'.$media->image)){
                unlink(public_path('web').'/media/lg/'.$media->image);
                unlink(public_path('web').'/media/md/'.$media->image);
                unlink(public_path('web').'/media/sm/'.$media->image);
                unlink(public_path('web').'/media/xs/'.$media->image);
                unlink(public_path('web').'/media/icon/'.$media->image);
                $media->delete();
                return 'success';
            }
            else{
                $media->delete();
                return 'failed';
            }
        }else{
                $media->delete();
        return 'not-exists';
        }
    }
}