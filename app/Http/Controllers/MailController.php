<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function postMail(Request $request){
        $all =$request->all();
        Mail::send('emails.customer_mail', compact('all'),function($message) use ($all){
            $message->from('info@paschalinotech.com')
                ->to('livinus134@gmail.com')
                ->subject($all['subject']);
        });
        return redirect()->back()->with('message','Thanks for your message.');
    }
}
