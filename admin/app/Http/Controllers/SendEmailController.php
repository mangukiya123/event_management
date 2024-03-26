<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;

use App\Mail\NotifyMail;


class SendEmailController extends Controller
{
	
    public function index(Request $res)
    {
      $email = $res->session()->get('email');
      Mail::to($email)->send(new NotifyMail());

      return redirect('/verifyotp');
    } 
}
