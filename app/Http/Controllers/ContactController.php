<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Models\Inquery;
use Illuminate\Http\Request;

class ContactController extends Controller
{


    public function store(Request $request)
    {

        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'contact_number'=>'required',
            'message'=>'required',
            'listing_id' => 'required',
            'user_id' => 'required',

        ]);

        $contact = new Contact([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'contact_number' => $request->get('contact_number'),
            'description' => $request->get('message'),
            'listing_id' => $request->get('listing_id'),
            'user_id' => $request->get('user_id'),

        ]);

        $isSuccess =$contact->save();
        if ($isSuccess) {
            $notification = array(
                'message' => 'Post created successfully!',
                'alert-type' => 'success'
            );

            return redirect('/')->with($notification);
        } else {
            $notification = array(
                'message' => 'Somthing Went wrong!',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }

    }


    public function inquery(Request $request)
    {
        $request->validate([
            'your-name'=>'required',
            'your-email'=>'required',
            'tel'=>'required',
            'message'=>'required',
        ]);

        $contact = new Inquery([
            'name' => $request->get('your-name'),
            'email' => $request->get('your-email'),
            'contact_number' => $request->get('tel'),
            'message' => $request->get('message'),
            'read' => false
        ]);

        $isSuccess =$contact->save();
        if ($isSuccess) {
            $notification = array(
                "contact_form_id"=>5,
                "status"=> "mail_sent",
                "message"=> "Thank you for your message. It has been sent.",
                "posted_data_hash"=> "6222067a6b04716d750f020e1dd603da",
                "demo_mode"=> true,
                "into"=> "#wpcf7-f5-p2116-o1",
                "invalid_fields"=> []
            );

            return $notification;
        } else {
            $notification = array(
                "contact_form_id"=>5,
                "status"=> "not_sent",
                "message"=> "Sorry, something went wrong",
                "posted_data_hash"=> "6222067a6b04716d750f020e1dd603da",
                "demo_mode"=> true,
                "into"=> "#wpcf7-f5-p2116-o1",
                "invalid_fields"=> []
            );
            return $notification;
        }

    }
}
