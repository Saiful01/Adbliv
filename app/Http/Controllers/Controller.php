<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function home()
    {
        return view('home.index');
    }
    public function contactSend(Request $request)
    {
        return $request->all();
        $name= $request['name'];
        $phone= $request['phone'];
        $email= $request['email'];
        $message= $request['message'];


        $msg = "Name : $name\n Phone: $phone \n Email : $email \n Message : $message";


        $msg = wordwrap($msg, 70);

// send email
        mail("contact@adbliv.com", "ADBLiv Website Message", $msg);


        return back()->with('success', " Your Message Successfully Send");
    }
}
