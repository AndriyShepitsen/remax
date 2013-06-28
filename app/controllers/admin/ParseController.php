<?php
//LOCATION: remax/public/parse 

use Sunra\PhpSimple\HtmlDomParser;

class ParseController extends BaseController {

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
	$str = 'http://www.remax-ni.net/realestatehomesforsale/60076-p001.html';
	$dom = HtmlDomParser::str_get_html( $str );
	
	$elems = $dom->find('li');
	dd($dom);
	//$html = readfile( 'http://www.remax-ni.net/realestatehomesforsale/60076-p001.html' );
	//echo $html;
	      

	return 'test';
	}

}