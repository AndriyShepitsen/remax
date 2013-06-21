<?php
//LOCATION: remax/public 
class LoginController extends BaseController {

	public function index()
	{
		//$test = Input::get('email');
		$valRules = array('email'=>'required|email',
			'password'=>'required');

		$validator = Validator::make(
			Input::all(), 
			$valRules
			);

		$messages = $validator->messages();

		if($validator->fails()){
			return Redirect::route('home')->with('mess','SSS');
		} else {
		    
		return View::make('admin.vw_panel');
		}
	}

}

