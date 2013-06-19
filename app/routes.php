<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
//Route::get('/', function()
//{
//	return View::make('hello');
//});

	Route::get('/', array('as'=>'home', 'uses'=>'HomeController@index'));
	/* =about */
	
	Route::get('/about', array('as'=>'about', 'uses'=>'AboutController@index'));

	/* =buying */
	
	Route::get('/anatomy_of_a_home_purchase', array('as'=>'anatomy_of_a_home_purchase', 'uses'=>'Anatomy_of_a_home_purchaseController@index'));
	Route::get('/deciding_where_to_live', array('as'=>'deciding_where_to_live', 'uses'=>'Deciding_where_to_liveController@index'));
	Route::get('/five_tips_to_narrow_your_online_home_search', array('as'=>'five_tips_to_narrow_your_online_home_search', 'uses'=>'Five_tips_to_narrow_your_online_home_searchController@index'));
	Route::get('/how_much_house_can_you_afford', array('as'=>'how_much_house_can_you_afford', 'uses'=>'How_much_house_can_you_affordController@index'));
	Route::get('/the_benefits_of_home_ownership', array('as'=>'the_benefits_of_home_ownership', 'uses'=>'The_benefits_of_home_ownershipController@index'));
	Route::get('/the_importance_of_buyers_agent', array('as'=>'the_importance_of_buyers_agent', 'uses'=>'The_importance_of_buyers_agentController@index'));