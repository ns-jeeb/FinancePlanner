<?php defined('SYSPATH') or die('No direct script access.');

	class Controller_Summary extends Controller_FinancePlanner 
	{
		public function action_index()
		{
			$summary_view = new View('summary/phpSummary');
			$this->template->set('financePlanner_content',$summary_view);
			$this->template->title = _('Summary');
			$this->setHeader();
			$this->setFooter();			
		}
		
		public function setHeader()
		{
			$summary_view = new View('templates/header');
			$this->template->set('financePlanner_header',$summary_view);			
		}
		
		public function setFooter()
		{
			$summary_view = new View('templates/footer');		
			$this->template->set('financePlanner_footer',$summary_view);			
		}	
	}

?>