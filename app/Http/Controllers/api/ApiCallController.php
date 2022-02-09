<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mail;
use App\Models\admin\Media;
use App\Models\admin\InquiryForm;
use DB;

class ApiCallController extends Controller
{
    public function sendContact(Request $request){
        // dd('send contact');
        // dd($request->input());
        // mail@giantinflatables.in

        $inquiryForm = new InquiryForm;
        $inquiryForm->item_id = $request->item_id;
        $inquiryForm->title = $request->title;
        $inquiryForm->description = $request->description;
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

            $to = 'test@alivecreate.com';

            // sendMailNotification('contact_inquiry', $to, 'Inquiry From: '.$request->name,
            //      ['name'=>$request->name, 'phone'=>$request->phone,
            //       'email' => $request->email,
            //       'country' => $request->country,
            //       'msg' => $request->message,
            //       'page_url' => $request->page_url,
            // ]);
            

            // if (Mail::failures()) {
            //     dd('failed mails');
            //     // return new Error(Mail::failures()); 
            // }else{
            //     dd('mail sent');
            // }
            // check for failed ones

        // else do redirect back to normal
        return back()->with('success', 'Contact Inquiry Sent...');
    }

    public function sendContactEnquiry(Request $request){
        // dd('send Product enquiry');

        // dd($request->input());
        // mail@giantinflatables.in
            $to = 'sales@giantinflatables.in';

            sendMailNotification('enquire', $to, 'Enquire From: '.$request->name,
                 ['name'=>$request->name,
                  'phone'=>$request->phone,
                  'email' => $request->email,
                  'country' => $request->country,
                  'title' => $request->title,
                  'image' => $request->image,
                  'product_url' => $request->product_url,
                  'page_url' => $request->page_url,
                  'msg' => $request->message
            ]);

            // check for failed ones
        if (Mail::failures()) {
            // return failed mails
            return new Error(Mail::failures()); 
        }

        // else do redirect back to normal
        return back()->with('success', 'Contact Inquiry Sent...');
    }

    public function testMail(){

        sendMailNotification('comment', 'sales@giantinflatables.in', 'Comment From '. 'Contact Page',
                ['name'=>'Admin','client_name' => 'Mahesh Bhai', 'msg' => 'Testing Mail',
                'task_name' => 'Sending Mail', 'satus' => 1,
                'url' => 'https://www.giantinflatables.in', 
        ]);

        return back()->with('success', 'Contact Inquiry Sent...');
    }


    public function UploadMultipleImage(Request $request){

        // dd($request->file('image'));
        // dd($request->file('image')[1]);

        // dd($request->file('image'));

        // dd($request->title[0]);


        header("Access-Control-Allow-Origin: *");


        for($i = 0; $i < count($request->title); $i++ ){
            

            $media = new Media;
            $media->media_id = $request->media_id;
            $media->image_type = $request->image_type;

            $media->image_alt = $request->alt[$i];
            $media->image_title = $request->title[$i];
            $media->youtube_embed = $request->youtube_embed[$i];
            
            $image_name = $request->file('image')[$i] ? uploadMultipleImageThumb2($request->file('image')[$i]):null;
            $media->image = $image_name;
            $save = $media->save();
        }


        // $image_name = uploadMultipleImageThumb($request);

        // foreach($image_name as $index => $image_name){
        //     $media = new Media;
        //     $media->media_id = $request->media_id;
        //     $media->image_type = $request->image_type;

        //     $media->image_alt = $request->alt[$index];
        //     $media->image_title = $request->title[$index];
        //     $media->youtube_embed = $request->youtube_embed[$index];
            

        //     $media->image = $image_name?$image_name:null;
        //     $save = $media->save();
        // }
        if($save){       
            return back()->with('success', 'Image Filed Uploaded...');
            // return back()->with('success', 'Images Uploaded...');
        }else{
            return 'something went wrong, try again later.';

        }
    }

    public function updateMultipleImageField($id, Request $request){

        $update = DB::table('media')->where('id', $id)
            ->update(['image_title' =>$request->title, 'image_alt' =>$request->alt,
            'youtube_embed' =>$request->youtube_embed
        ]);

        

        if($update){       
            return back()->with('success', 'Image Filed Uploaded...');
            // return (['status' => 'success', 'message' => 'Image fields are Updated...']);
        }else{
            return (['status' => 'failed', 'message' => 'Something went wrong, Try again...']);

        }
    }
}
