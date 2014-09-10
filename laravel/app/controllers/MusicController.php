<?php

require_once dirname(__FILE__).'/../openapi/OpenApi.php';

class MusicController extends BaseController {

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

	public function login()
	{
		var_dump(Input::all());
		//return View::make('test',array('name' => $name));

	}

	public function index()
	{
		$apiObj = OpenApi::createApiObj( 'douban');
		$list = $apiObj->getDefaultList();
		return View::make('musiclist');
	}

}
