<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends BaseModel implements UserInterface, RemindableInterface {


	public static $rules = array(
	'first_name'=>'required|min:2',
	'last_name'=>'required|min:2',
<<<<<<< HEAD
	'email'=>'required|email|min:4|unique:users',
=======
	'email'=>'required|email|min:4|alpha_dash|unique:users',
>>>>>>> 4cd633761e7021b90a93bed50314c355528e2cca
	'password'=>'required|min:6|confirmed|alpha_dash',
	'password_confirmation'=>'required|min:6|alpha_dash',
	'phone'	=> 'min:10'
	);

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	//protected $table = 'users';
	//protected $fillable = array(	 'email', 'password');
	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password');

	/**
	 * Get the unique identifier for the user.
	 *
	 * @return mixed
	 */
	public function getAuthIdentifier()
	{
		return $this->getKey();
	}

	/**
	 * Get the password for the user.
	 *
	 * @return string
	 */
	public function getAuthPassword()
	{
		return $this->password;
	}

	/**
	 * Get the e-mail address where password reminders are sent.
	 *
	 * @return string
	 */
	public function getReminderEmail()
	{
		return $this->email;
	}

}