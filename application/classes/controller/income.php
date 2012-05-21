<?php defined('SYSPATH') or die('No direct script access.');

	class Controller_Income extends Controller_FinancePlanner
	{
		public function action_index()
		{
			$this->template->title = 'Finance Planner - Income';
			$this->template->styles[] = 'media/styles/income.css';
			$this->template->scripts[] = 'media/scripts/income.js';
			$income_view = View::factory('v_income');
			$this->template->content->content = $income_view;
		}
	}
	
?>