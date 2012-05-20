<?php defined('SYSPATH') or die('No direct script access.');

	class Controller_PreSaving extends Controller_FinancePlanner
	{
		public function action_index()
		{
			$pre_saving_view = new View('preSaving/phpPreSaving');
			$this->template->set('financePlanner_content',$pre_saving_view);
			$this->template->title = _('Pre-Saving');
			$this->setHeader();
			$this->setFooter();			
		}
		
		public function setHeader()
		{
			$pre_saving_view = new View('templates/header');			
			$this->template->set('financePlanner_header',$pre_saving_view);			
		}
		
		public function setFooter()
		{
			$pre_saving_view = new View('templates/footer');			
			$this->template->set('financePlanner_footer',$pre_saving_view);			
		}	
	}
?>