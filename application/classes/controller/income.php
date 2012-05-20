<?php defined('SYSPATH') or die('No direct script access.');

	class Controller_Income extends Controller_FinancePlanner
	{
		public function action_index()
		{
			$income_view = new View('income/phpIncome');	
			$this->template->set('financePlanner_content',$income_view);
			$this->template->title = _('Income');
			$this->setHeader();
			$this->setFooter();			
		}
		
		public function setHeader()
		{
			$income_view = new View('templates/header');		
			$this->template->set('financePlanner_header',$income_view);			
		}
		
		public function setFooter()
		{
			$income_view = new View('templates/footer');		
			$this->template->set('financePlanner_footer',$income_view);			
		}
	}
	
?>