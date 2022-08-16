<?php

namespace App\Http\Controllers;
use App\Models\Destination;
use Illuminate\Http\Request;
use Symfony\Component\Console\Descriptor\Descriptor;

class DestinationController extends Controller
{
    public function store(Request $request){
        if($request->val1 == '5'){
            return redirect()->route('tour-details5');
        }
        if($request->val1 == '4'){
            return redirect()->route('tour-details4');
        }
        if($request->val1 == '3'){
            return redirect()->route('tour-details3');
        }
        if($request->val1 == '2'){
            return redirect()->route('tour-details2');
        }
        if($request->val1 == '1'){
            return redirect()->route('tour-details1');
        }
        if($request->val1 == '6'){
            return redirect()->route('tour-details6');
        }
        if($request->val1 == '7'){
            return redirect()->route('tour-details7');
        }
        if($request->val1 == '8'){
            return redirect()->route('tour-details8');
        }
        if($request->val1 == '9'){
            return redirect()->route('tour-details9');
        }
        if($request->val1 == '10'){
            return redirect()->route('tour-details10');
        }
// $destination = Destination::find($id)
    }

    public function index(){
        $data = Destination::all();
        return view('index',compact('data'));
    }

}
