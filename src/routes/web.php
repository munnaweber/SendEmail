<?php 
	
	$namespace = "Email\Send\Http\Controllers";

Route::group([

	"namespace" => $namespace,
	"prefix" => "es"

], function(){

	Route::get("input", function(){
		return view("send::emailinput");
	})->middleware('web');

	Route::post("send/email/user", "EmailController@sendemail");

});