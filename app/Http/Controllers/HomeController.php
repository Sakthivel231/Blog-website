<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function contactForm(){
        return view("contact.Form");
    }

    public function SubmitContact(Request $request){
        $validate=$request->validate([
              'name'=>'required|max:25',
              'email'=> 'required|email',
              'message'=>'required'
        ]);
        // dd($request->all());
       // $data = $request->all();
        // store the data or send email
        //success message
        return redirect()->route('contact.show')->with('status', 'Your message has been sent successfully!');
    }
}
