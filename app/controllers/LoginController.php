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
		$errorMessages = $validator->messages();
		var_dump($errorMessages);

		return View::make('login.vw_login')->with(compact($errorMessages));
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
	return View::make('login.vw_login');
}
	


}

