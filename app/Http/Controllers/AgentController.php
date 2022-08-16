<?php

namespace App\Http\Controllers;
use App\Models\Agent;
use Illuminate\Http\Request;
use Mail;
class AgentController extends Controller
{
    public function Agent() {
return view('agent');
    }
    public function store(Request $request){
        $agent=new Agent();
        $agent->name=$request->name;
        $agent->owner=$request->owner;
        $agent->website=$request->website;
        $agent->destinations=$request->destinations;
        $agent->designations=$request->designations;
        $agent->email=$request->email;
        //  $agent->phone=$request->phone;
        $agent->skype=$request->skype;
        $agent->old=$request->old;
        $agent->employee=$request->employee;
        $agent->region=$request->region;
        $agent->profile=$request->profile;
        $agent->help=$request->help;

$agent->save();
  Mail::send('agent_email',
             array(
                 'name' => $request->get('name'),
                 'owner' => $request->get('owner'),
                 'website' => $request->get('website'),
                 'destinations' => $request->get('destinations'),
                 'designation' => $request->get('designation'),
                 'email' => $request->get('email'),
                // 'phone' => $request->get('phone'),
                 'skype' => $request->get('skype'),
                 'old' => $request->get('old'),
                 'employee' => $request->get('employee'),
                 'region' => $request->get('region'),
                 'profile' => $request->get('profile'),
                 'help' => $request->get('help'),

             ), function($message) use ($request)
               {
                  $message->from($request->email);
                  $message->to('linalshende17@gmail.com');
                  $message->subject('Contact-form');

               });

         return back()->with('success', 'Thank you for contact us!');

    }
}
