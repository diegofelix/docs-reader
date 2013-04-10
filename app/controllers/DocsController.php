<?php

use \dflydev\markdown\MarkdownParser;

class DocsController extends BaseController {

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

	public function ShowDocs($chapter = null)
	{
		if ($chapter === null)
		{
			$chapter = 'installation';
		}

		$test = new MarkdownParser();

		$data = array(
			'chapter' => $test->transformMarkdown(File::get(Config::get('docs.path') . $chapter . '.md')),
			'index' => $test->transformMarkdown(File::get(Config::get('docs.path') . 'documentation.md'))
		);

		return View::make('index', $data);
	}

}