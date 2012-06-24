<?php defined('SYSPATH') or die('No direct script access.');

	class Controller_Income extends Controller_FinancePlanner
	{
		public function action_index()
		{
			$this->template->title = 'Finance Planner - Income';
			$this->template->styles[] = $this->config_locations->get('styles').'income.css';
			$this->template->scripts[] = $this->config_locations->get('styles').'income.js';
			$income_view = View::factory('v_income');
			$this->template->content->content = $income_view;
			$this->template->content->content->icons_location = $this->config_locations->get('icons');
		}
	}
	
?>