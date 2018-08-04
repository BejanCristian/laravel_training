<?php

namespace App\Http\Controllers;
use Mail;

use Illuminate\Http\Request;

class MailingControler extends Controller
{
    public function create(Request $request){
       


        $this->validate($request,[
            'email' => 'required|email',
        ],[
            //'required' => 'Costum error message for validation'
        ]);
       // dd($request->email);

       $name = "Cristi";
       Mail::send('mails.welcome',['name' => $name], function($m){
           $m->to('sdae@gmail.com')
               ->subject('Welcome');
       });
        return redirect()->route('home')->with('status', 'Email sent');
    }
}
