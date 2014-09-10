<?php

class UserController extends BaseController {

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

	public function getUserName()
	{
		$name = "lifei";
		//return View::make('test', array('name' => $name));

		$data = DB::selectOne('select * from t_user ');
		var_dump($data);

		//return View::make('test',array('name' => $name));

	}

}
