<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller_Template {
	public $template = 'template';	
	
	public function action_index()
	{
		//$view = "This is what i learned so far";
		$view = new View('template');
		$this->response->body($view);
		$this->template->set($view);
	}

} // End Welcome
