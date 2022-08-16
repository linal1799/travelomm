<?php

namespace App\Http\Controllers;
use App\Models\Booking;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function store(Request $request)
   {
       $booking=new Booking();
       $booking->name=$request->name;
       $booking->email=$request->email;
       $booking->date=$request->date;
       $booking->people=$request->people;
       $booking->message=$request->message;
       $booking->save();
       if ($booking) {
        request()->session()->flash('bookingsuccess','successfully booked!!');
    }
    return redirect()->route('booking');

    // return view('/tour-details');

    }
}
