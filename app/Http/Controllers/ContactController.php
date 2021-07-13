<?php

namespace App\Http\Controllers;
use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;
use App\Contact;
use Mail;

class ContactController extends Controller
{

    public function storeContactForm(Request $request)
    {
        $input = $request->all();
        Contact::create($input);
//          Send mail to admin
        \Mail::send('contactMail', array(
            'name' => $input['name'],
            'email' => $input['email'],
            'subject' => $input['subject'],
            'message' => $input['message'],
        ), function($message) use ($request){
            $message->from($request->email);
            $message->to('info@unitymediavn.com', 'Admin')->subject($request->get('subject'));
        });

        return "Contact Form Submit Successfully";
    }
}
