<?php defined('SYSPATH') or die('No direct script access.');

	class Controller_PostSaving extends Controller_FinancePlanner
	{
		public function action_index()
		{
			$post_saving_view = new View('postSaving/phpPostSaving');
			$this->template->set('financePlanner_content',$post_saving_view);
			$this->template->title = _('Post-Saving');
			$this->setHeader();
			$this->setFooter();			
		}
		
		public function setHeader()
		{
			$post_saving_view = new View('templates/header');			
			$this->template->set('financePlanner_header',$post_saving_view);			
		}
		
		public function setFooter()
		{
			$post_saving_view = new View('templates/footer');			
			$this->template->set('financePlanner_footer',$post_saving_view);			
		}	
	}
?>