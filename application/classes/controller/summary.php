<?php defined('SYSPATH') or die('No direct script access.');

	class Controller_Summary extends Controller_FinancePlanner 
	{
		public function action_index()
		{
			$this->template->title = 'Finance Planner - Summary';
			$this->template->styles[] = 'media/styles/summary.css';
			$this->template->scripts[] = 'media/scripts/summary.js';
			$v_sumary = View::factory('v_summary');
			$this->template->content->content = $v_sumary;	
		}
	}

?>