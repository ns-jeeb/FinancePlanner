<?php defined('SYSPATH') or die('No direct script access.');
	
	class Controller_FinancePlanner extends Controller_Template
	{
		public $template;
		public $config_locations;
		
		public function before()
		{
			parent::before();
			if($this->auto_render)
			{
				$this->template = View::factory('template/financeplanner');
				$this->config_locations = Kohana::$config->load('locations');
				$styles = array
				(
					$this->config_locations->get('styles_template').'template.css',
					$this->config_locations->get('styles_template').'content.css',
					$this->config_locations->get('styles_template').'menu_bar.css',
					$this->config_locations->get('styles_template').'header.css',
					$this->config_locations->get('styles_template').'footer.css',
				);
				$scripts = array 
				(
					$this->config_locations->get('scripts_template').'jquery.js',
					$this->config_locations->get('scripts_template').'header.js',	
					$this->config_locations->get('scripts_template').'content.js',
					$this->config_locations->get('scripts_template').'footer.js',
					$this->config_locations->get('scripts_template').'menu_bar.js',
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