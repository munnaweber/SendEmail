<?php

namespace Email\Send\Http\Controllers;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Email\Send\Mail\SendEmailUser;
use Email\Send\Models\SendEMailPackage;
use Illuminate\Http\Request;
use Mail;
use Session;

class EmailController extends Controller
{
    public function sendemail(Request $get){
    	$this->validate($get, [
    		"subject" => "required",
    		"email" => "required",
    		"message" => "required"
    	]);

    	Mail::to($get->email)->send(new SendEmailUser($get->subject, $get->message));

    	$inserto = SendEMailPackage::insert([
    		"email" => $get->email,
    		"subject" => $get->subject,
    		"message" => $get->message,
    		"created_at" => Carbon::now()
    	]);
    	if($inserto){
    		Session::flash("successmail");    		
    	}
    	return back();
    }
}
