<?php defined('SYSPATH') or die('No direct script access.');
	
	class Controller_FinancePlanner extends Controller_Template
	{
		public $template;
		
		public function before()
		{
			parent::before();
			if($this->auto_render)
			{
				$this->template = View::factory('template/financeplanner');
				$styles = array
				(
					'media/styles/template.css',
					'media/styles/content.css',
					'media/styles/menu_bar.css',
					'media/styles/header.css',
					'media/styles/footer.css',
				);
				$scripts = array 
				(
					'media/scripts/jquery.js',
					'media/scripts/header.js',	
					'media/scripts/content.js',
					'media/scripts/footer.js',
					'media/scripts/menu_bar.js',
				);
				$this->template->title = 'Finance Planner';
				$this->template->header = View::factory('template/header');
				$this->template->content = View::factory('template/default_content');
				$this->template->content->menu_bar = View::factory('template/menu_bar');
				$this->template->footer = View::factory('template/footer');
				$this->template->styles = $styles;
				$this->template->scripts = $scripts;
			}
		}
	}
?>