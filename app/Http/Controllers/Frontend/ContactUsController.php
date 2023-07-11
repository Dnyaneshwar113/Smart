<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Mail\EmailDemo;
use Mail;
class ContactUsController extends Controller
{
    public function index(Request $request){
        return view('frontend.contact_us');
        
    }

  public function sendEmail(Request $request){

    // $this->validate($request, [
    //     'name' => 'required',
    //     'email' => 'required|email',
    //     'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
    //     'message' => 'required'
    //  ]);

    $details = [
      'name' => $request->name, 
      'email' => $request->email, 
      'phone' => $request->phone, 
      'message' => $request->message
    ];
     //  Store data in database
     Contact::create($request->all());

    Mail::to('dnyaneshwar.idhole@idaminfra.com')->send(new EmailDemo($details));
    return back()->with('message_sent','Thank you for filling the form. We will get in touch with you shortly.');
  }
}
