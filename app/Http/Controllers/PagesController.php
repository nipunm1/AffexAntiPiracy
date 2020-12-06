<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Mail;

class PagesController extends Controller
{
    public function home(){
        return view('layouts.app');
    }

    public function sendmail(Request $request){
        
        $validator = Validator::make($request->all(), [
            'name'=>'required',
            'email'=>'required | email',
            'message'=>'required',
            'phone'=>'min:10 | max:10',
        ]);
        if ($validator->fails()) {
            return redirect('/#contact')
                        ->withErrors($validator)
                        ->withInput();
                        //return "error";
        }

        $details = [
                     'name'=>$request->name,
                     'email' =>$request->email,
                     'phone'=>$request->phone,
                     'message'=>$request->message,
        ];
        Mail::to('ngpt007@gmail.com')->send(new \App\Mail\TestMail($details));
        session()->flash('success','We have recieved your message');
        return redirect('/#contact');          
        //return "done";
    }
}
