<?php

namespace App\Http\Controllers;

use Mail;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function create(){
    	return view('contact');
    }

    public function store(Request $request){
    	Mail::send('emails.contact_us',['msg'=>$request->message,
        'name'=>$request->name,'phone_no'=>$request->phone_no],function($message)use($request){
          $message->to('bhutaneselyrics@gmail.com'); 
          $message->subject($request->subject);       
        });
    return redirect()->back()->with('flash_message','Thank you for the message');

    }
}
