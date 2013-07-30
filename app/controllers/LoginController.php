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
		return View::make('login.vw_login')->withErrors($validator)
		->withInput();
		} else {

		if(Auth::attempt(array('email'=>$email, 'password'=>$password))){

		echo "Success";

		} else {

		echo "Fail";

		}
}
		    
		//return View::make('admin.vw_panel');
		
	} 

public function fail()
{
	return View::make('login.vw_login')->withErrors($validator);
}
	


}

