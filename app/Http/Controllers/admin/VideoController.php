<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\Video;
use File;
use DB;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response 
     */
    public function index()
    {
        $data = [
            'videos' =>  Video::orderBy('id')->get()
        ];
        return view('adm.pages.video.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adm.pages.video.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->status);
        if ($request->status) {
            $status = 1;
        } else {
            $status = 0;
        }

       $video = new video;
       $video->name = $request->name;
       $video->short_description = $request->short_description;
       $video->full_description = $request->full_description;
       $video->slug=$request->slug;
        
       $video->meta_title  = $request->meta_title;
       $video->meta_keyword  = $request->meta_keyword;
       $video->meta_description  = $request->meta_description;
       $video->status  = $status;
       $save =$video->save();

        if ($save) {
            return (redirect(route('admin.manage-video', $video->id)))->with('success', 'Video Added...');
        } else {
            return back()->with('fail', 'Something went wrong, try again later...');
        }

    }
    public function manage_video($id)
{
    // $photoDetails = DB::table('media')->where(['media_id' => $id, 'image_type'=>'award'])->orderBy('item_no', 'ASC')->get();

    $photoDetails = DB::table('media')->where(['media_id' => $id, 'image_type'=>'Video'])->orderBy('item_no', 'ASC')->get();

    
    $data = [
        'video' => video::find($id),
        'images' => $photoDetails,
    ];
    return view('adm.pages.video.manage-video',$data);
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
        $video = video::find($id);
        $data = [
            'video' =>  $video,
        ];

        if ($video) {
            return view('adm.pages.video.edit', $data);
        } else {
            return redirect(route('video.index'))->with('fail', 'video Not Available...');
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
        $request->validate([
            'name' => 'required',
            'short_description' => 'required',
            'full_description' => 'required',
            'slug' => 'required',
        ]);

        if ($request->status) {
            $status = 1;
        } else {
            $status = 0;
        }


        $video =  video::find($id);
        $video->name = $request->name;
        $video->short_description = $request->short_description;
        $video->full_description = $request->full_description;
        $video->slug  = $request->slug;
        $video->meta_title  = $request->meta_title;
        $video->meta_keyword  = $request->meta_keyword;
        $video->meta_description  = $request->meta_description;
        $video->status  = $status;

        $save =$video->save();

        if ($save) {
            return redirect(route('video.index'))->with('success', 'video Reconization Updated...');
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
    public function destroy(Video $video)
    {
        $video = $video->delete();
        if($video){
            return back()->with('success', 'Video Deleted...');
        }else{
            return back()->with('fail', 'Something went wrong, try again later...');
        }
    }
}
