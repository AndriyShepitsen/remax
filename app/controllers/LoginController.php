<?php
//LOCATION: remax/public 
class LoginController extends BaseController {

	public function index()
	{
		$email = Input::get('email');
		$password = Input::get('password');

		$validator  = User::validate([
			'email'=>$email,
			'password'=>$password
			]);

		if ($validator->fails()){
		return Redirect::route('login-errors')
		->withErrors($validator)
		->withInput()->
		with('agents', parent::getRandomAgents());
		} else {

		if(Auth::attempt(array('email'=>$email, 'password'=>$password))){

		return Redirect::route('home')
		->with('message', 'You have been logged in')
		->with('agents', parent::getRandomAgents());

		} else {
		$user = User::where('email','=', $email)->first();

		if ($user){
		$message = 'Your password is incorrect. Try agin';

		} else {

		$message = 'You are not registered. Please sign-up';

		}


		return Redirect::route('login-errors')
		->withInput()
		->with('message', $message)
		->with('agents', parent::getRandomAgents());

		}
		}
		    
		//return View::make('admin.vw_panel');
		
	} 

public function fail()
{
	return View::make('login.vw_login');
}
	


}

