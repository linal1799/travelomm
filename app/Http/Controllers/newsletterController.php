<?php

namespace App\Http\Controllers;
use App\Models\Newsletter;

use Illuminate\Http\Request;

class newsletterController extends Controller
{
    public function store(Request $request)
    {
        $email=new Newsletter();
        $email->email=$request->email;
        $email->save();
     return redirect()->route('index');
     }
}
