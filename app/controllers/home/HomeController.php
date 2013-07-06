<?php
//LOCATION: remax/public
include_once app_path() . '\util\TextOperations.php';
class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/
	public function index()
	{

	$newsBuy = News::where('bs','=','1')->orderBy('id', 'desc')->take(1)->get(); // uses model News 
	$newsSell = News::where('bs','=','2')->orderBy('id', 'desc')->take(1)->get(); // uses model News 
	//generated by artisan command 'php artisan generate:model News'
	$newsBuy[0]->body = TextOperations::shortenString($newsBuy[0]->body, 420);  	
	$newsSell[0]->body = TextOperations::shortenString($newsSell[0]->body, 420);  	

		
	return View::make('home.vw_home')
	->with('newsBuy',$newsBuy[0])
	->with('newsSell', $newsSell[0]);
	}
}