<?php  
	$summary = HTML::anchor('/summary/',"Summary");
	$income = HTML::anchor('/income/', 'Income');
	$savings = HTML::anchor('/savings/','Saving');
	$expenses = HTML::anchor('/expenses/', 'Expenses');
?>  
<div id="div_menu_bar">
	<div class='menu_item'>
		<? echo $summary; ?>
	</div>
	<div class='menu_item'>
		<? echo $expenses; ?>
	</div>
	<div class='menu_item'>
		<? echo $income; ?>
	</div>
	<div class='menu_item'>
		<? echo $savings; ?>
	</div>	
</div>	

   