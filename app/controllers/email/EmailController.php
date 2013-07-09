<?php

class EmailController extends BaseController {


	public function index()
	{
	  $email  = Input::get('email');	
	  $subject  = Input::get('subject');	
	  $message  = Input::get('message');	
	  $data = array();
	  Mail::send('emails.welcome', $data, function($m)
{
	$m->to('drivanbohun@gmail.com', 'Ivan Bohun')->subject('Welcome!');
});

		return 'Thanks for your email';
	}

}