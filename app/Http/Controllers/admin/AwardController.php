<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\award;
use Illuminate\Http\Request;
use File;
use DB;

class AwardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
 

    public function index()
    {
        $data = [
            'awards' =>  award::orderBy('id')->get() 
        ];
        return view('adm.pages.award.index', $data);   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adm.pages.award.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->status) {
            $status = 1;
        } else {
            $status = 0;
        }

        $award = new award;
        $award->name = $request->name;
        $award->short_description = $request->short_description;
        $award->full_description = $request->full_description;
        $award->slug=$request->slug;
        
        $award->meta_title  = $request->meta_title;
        $award->meta_keyword  = $request->meta_keyword;
        $award->meta_description  = $request->meta_description;
        $award->status  = $status;
        $save = $award->save();

        if ($save) {
            return (redirect(route('admin.manage-photo', $award->id)))->with('success', 'Awards Added...');
        } else {
            return back()->with('fail', 'Something went wrong, try again later...');
        }

    }
public function manage_photo($id)
{
    // $photoDetails = DB::table('media')->where(['media_id' => $id, 'image_type'=>'award'])->orderBy('item_no', 'ASC')->get();

    $photoDetails = DB::table('media')->where(['media_id' => $id, 'image_type'=>'award'])->orderBy('item_no', 'ASC')->get();

    
    $data = [
        'award' => award::find($id),
        'images' => $photoDetails,
    ];
    return view('adm.pages.award.manage-photo',$data);
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
        $award = award::find($id);
        $data = [
            'award' =>  $award,
        ];

        if ($award) {
            return view('adm.pages.award.edit', $data);
        } else {
            return redirect(route('award.index'))->with('fail', 'Award Not Available...');
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


        $award =  award::find($id);
        $award->name = $request->name;
        $award->short_description = $request->short_description;
        $award->full_description = $request->full_description;
        $award->slug  = $request->slug;
        $award->meta_title  = $request->meta_title;
        $award->meta_keyword  = $request->meta_keyword;
        $award->meta_description  = $request->meta_description;
        $award->status  = $status;

        $save =$award->save();

        if ($save) {
            return redirect(route('award.index'))->with('success', 'Award Reconization Updated...');
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
    public function destroy(award $award)
    {
        if (File::exists(public_path('web') . '/media/lg/' . $award->image)) {
            unlink(public_path('web') . '/media/lg/' . $award->image);
            unlink(public_path('web') . '/media/md/' . $award->image);
            unlink(public_path('web') . '/media/sm/' . $award->image);
            unlink(public_path('web') . '/media/xs/' . $award->image);
            unlink(public_path('web') . '/media/icon/' . $award->image);

            deleteTableUrlData($award->id, 'award_link');
            $award = $award->delete();
            return back()->with('success', 'Award Recognization Deleted...');
        } else {
            deleteTableUrlData($award->id, 'award_link');
            $award = $award->delete();
            return back()->with('success', 'Award Recognization Deleted...');
        }
    }
}
