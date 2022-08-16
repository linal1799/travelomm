<?php

namespace App\Http\Controllers;
use App\Models\Email;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function store(Request $request)
    {
        $email=new email();
        $email->email=$request->email;
        $email->save();
     return redirect()->route('/index');
     }
    }


