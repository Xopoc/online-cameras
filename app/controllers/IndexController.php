<?php


class IndexController extends BaseController {
	/*
	|--------------------------------------------------------------------------
	| Default Index Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function startPage($name)
	{
        $people = array(
            "One",
            "Two",
            "Blah"
        );

        Debugbar::error($name);
        Debugbar::info($people);

        if (in_array($name, $people)) {
            return View::make('index.startPage', array(
                'name'=>$name,
                'people'=>$people
            ));
        }
        App::abort(404);
	}
}
