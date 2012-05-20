<ul>
<?php  
	$summary = HTML::anchor('summary/',"Summary");
	$income = HTML::anchor('income/', 'Income');
	$pre_saving = HTML::anchor('preSaving/','Pre-saving');
	$post_saving = HTML::anchor('postSaving/', 'Post-saving');
  
	$sections = array("Summary","Income","PreSaving","PostSaving");                                                  
	
	foreach ($sections as $menu) {                      
		
		switch($menu)
		{
			case 'Summary':
				echo $summary;				
				break; 
				
			case 'Income':
				echo $income;				
				break;
			case 'PreSaving':
				echo $pre_saving;				
				break;
			case 'PostSaving':
				echo $post_saving;				
				break;
			default:
				echo $summary;
				break;
		} 		                                                
	}                                        
?>     

                                              
</ul>

   