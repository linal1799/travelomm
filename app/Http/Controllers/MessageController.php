<?php

namespace App\Http\Controllers;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function create() {
        return view('contact');
     }
    public function store(Request $request)
    {
        $message=new Message();
        $message->name=$request->name;
        $message->email=$request->email;
        $message->phone=$request->phone;
        $message->subject=$request->subject;
        $message->message=$request->message;
        $message->save();
        return redirect()->route('contact');


     }

}
