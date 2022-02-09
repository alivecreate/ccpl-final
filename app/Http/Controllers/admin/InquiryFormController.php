<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\InquiryForm;

class InquiryFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = ['inquiryForms' =>  InquiryForm::orderBy('id', 'DESC')->get()];
        return view('adm.pages.contact.inquiry-form-list', $data);
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
        // dd($request->input());
        
        $inquiryForm = new InquiryForm;
        $inquiryForm->item_id = $request->item_id;
        $inquiryForm->title = $request->title;
        $inquiryForm->item_image = $request->product_image;
        
        $inquiryForm->item_url = $request->product_url;
        $inquiryForm->page_url = $request->page_url;
        $inquiryForm->client_name = $request->client_name;
        $inquiryForm->client_country = $request->client_country;
        $inquiryForm->client_phone = $request->client_phone;
        $inquiryForm->client_email = $request->client_email;
        $inquiryForm->client_message = $request->client_message;
        
        $save = $inquiryForm->save();
        if($save){
            return back()->with('success', 'Inquiry Submitted...');
        }else{
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = InquiryForm::destroy($id);
        if ($delete) {
            return back()->with('success', 'Inquiry Deleted...');
        } else {
            return back()->with('fail', 'Something went wrong, try again later...');
        }
    }
}
