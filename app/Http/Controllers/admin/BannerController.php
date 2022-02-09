<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'banners' =>  Banner::orderBy('id', 'desc')->get(),
        ];
        return view('adm.pages.banner.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg',
        ]);

        $item_no = Banner::orderBy('item_no', 'desc')->first();

        if ($item_no) {
            $item_no =  $item_no->item_no + 1;
        } else {
            $item_no = 1;
        }

        if ($request->status) {
            $status = 1;
        } else {
            $status = 0;
        }

        $image_name = uploadImageThumb($request);
        $banner = new banner;
        $banner->item_no = $item_no;
        $banner->title = $request->title;
        $banner->image = $image_name;
        $banner->description = $request->description;
        $banner->url = $request->url;
        $banner->position = $request->position;

        $banner->status = $status;
        // $slider->admin_id = session('LoggedUser')->id;

        $save = $banner->save();


        if ($save) {
            $banner_list = Banner::find($banner->id);
            $banner_list->item_no = $item_no;
            // dd($slider->id);
            $banner_list->save();

            return back()->with('success', 'Banner Added...');
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
        $banner =  Banner::find($id);

        $data = [
            'banners' =>  Banner::orderBy('item_no')->get(),
            'banner' =>  $banner
        ];
        if ($banner) {
            return view('adm.pages.banner.edit', $data);
        } else {
            return redirect(route('banner.index'))->with('fail', 'banner Not Available...');
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
            'image' => 'image|mimes:jpg,png,jpeg|max:' . getMaxUploadSide(),
        ]);

        if ($request->file('image')) {
            $image_name = uploadImageThumb($request);
        } else {
            $image_name = $request->old_image;
        }

        $item_no = Banner::orderBy('item_no', 'desc')->first();

        if ($request->status) {
            $status = 1;
        } else {
            $status = 0;
        }

        $banner = Banner::find($id);
        $banner->title = $request->title;
        $banner->image = $image_name;
        $banner->description = $request->description;
        $banner->url = $request->url;
        $banner->position = $request->position;

        $banner->status = $status;
        // $banner->admin_id = session('LoggedUser')->id;

        $save = $banner->save();


        if ($save) {

            return back()->with('success', 'Banner Updated...');
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
    public function destroy(banner $banner)
    {
        $banner = $banner->delete();
        if ($banner) {
            return back()->with('success', 'Banner Deleted...');
        } else {
            return back()->with('fail', 'Something went wrong, try again later...');
        }
    }
    public function update_list_no($id)
    {

        $i = 1;
        foreach ($data as $key => $value) {
            $banner = Banner::find($value);
            $banner->item_no = $i;
            $banner->save();
            $i++;
        }
    }
}
