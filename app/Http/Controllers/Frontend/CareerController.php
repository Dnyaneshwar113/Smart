<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Career;
use App\Mail\SendMail;
use Mail;

class CareerController extends Controller
{
    public function index(){
        
        return view('frontend.career');
    }

    public function store(Request $request){
        

        $resume = time() . '.' . $request['cover_letter']->getClientOriginalName();
        $resume1 = time() . '.' . $request['cv']->getClientOriginalName();

        $data= new Career();
        $data->name =  $request->name;
        $data->phone = $request->phone;
        $data->email = $request->email;
        $data->message = $request->message;
        $data->cover_letter = $resume;
        $data->cv = $resume1;
        $data->save();

        // for mailling function working
        $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'phone' => 	$request->phone,
            'message' => 	$request->message,
            'cover_letter' => 	$request->cover_letter,
            'cv' => 	$request->cv,

        );
        Mail::to('dnyaneshwar.idhole@idaminfra.com')->send(new SendMail($data));
        $request['cover_letter']->move(base_path() . '/storage/app/public/CL', $resume);
        $request['cv']->move(base_path() . '/storage/app/public/CV', $resume1);
        return back()->with('message_sent','Thank you for filling the form. We will get in touch with you shortly.');
    }
}
