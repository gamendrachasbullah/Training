<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact(){
        return view('contact');
    }


    public function contactSubmit(Request $request)

    {
        Mail::send('emails.contactmail',[
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' =>$request->message,
        ], function($mail) use($request){
            $mail->from(env('MAIL_FROM_ADDRESS'),$request->name);
            $mail->to("gchasbulloh@gmail.com")->subject('Contact Us Message');
        });
        return "Message has been sent successfull";
    }
}
