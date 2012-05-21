<?php defined('SYSPATH') or die('No direct script access.');

	class Controller_Expenses extends Controller_FinancePlanner
	{
		public function action_index()
		{
			$this->template->title = 'Finance Planner - Expenses';	
			$this->template->styles[] = 'media/styles/expenses.css';
			$this->template->scripts[] = 'media/scripts/expenses.js';
			$v_expenses = View::factory('v_expenses');
			$this->template->content->content = $v_expenses;
		}	
	}
?>