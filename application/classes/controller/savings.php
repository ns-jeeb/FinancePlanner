<?php defined('SYSPATH') or die('No direct script access.');

	class Controller_Savings extends Controller_FinancePlanner
	{
		public function action_index()
		{
			$this->template->title = 'Finance Planner - Savings';
			$this->template->styles[] = 'media/styles/savings.css';
			$this->template->scripts[] = 'media/scripts/savings.js';
			$v_savings = View::factory('v_savings');
			$this->template->content->content = $v_savings;		
		}
	}
?>