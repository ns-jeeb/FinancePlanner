<?php defined('SYSPATH') or die('No direct script access.');
	
	class Controller_FinancePlanner extends Controller_Template
	{
		public $template = 'financePlanner';
		
		public function before()
		{
			parent::before();
			if($this->auto_render)
			{
				$this->template->title = '';
				$this->template->header = '';				
				$this->template->content = '';
				$this->template->footer = '';
				$this->template->styles = array();;
				$this->template->scripts = array();
				
			}
		}
		
		public function after()
		{
			if($this->auto_render)
			{
				$this->template->header = 'templates/header';
				$this->template->footer = 'templates/footer';
				$styles = array
				(
					'templates/template.css' ,
					'media/stylesheet/cssSummary.css',
					'media/stylesheet/cssIncome.css',
					'media/stylesheet/cssPostSaving.css',
					'media/stylesheet/cssPreSaving.css',
				);
				
				$scripts = array 
				(
					'http://code.jquery.com/jquery-1.7.2.min.js',
					'media/javaScript/jsSummary.js',
					'media/javaScript/jsIncome.js',
					'media/javaScript/jsPostSaving.js',
					'media/javaScript/jsPreSaving.js',					
				);
				$this->template->styles = array_merge($this->template->styles, $styles);
				$this->template->scripts = array_merge($this->template->scripts, $scripts);
				
			}
			parent:: after();
		}
	}
?>