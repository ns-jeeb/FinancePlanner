<?php 
	$list_income = array(
		array('title'=>'Job','date'=>'14-April-2012', 'amount'=>toCurrency(1400.25), 'note'=>'Work at so and so place'),
		array('title'=>'Job','date'=>'14-April-2012', 'amount'=>toCurrency(1400), 'note'=>'Work at so and so place'),
		array('title'=>'Job','date'=>'14-April-2012', 'amount'=>toCurrency(1400), 'note'=>'Work at so and so place'),
	);
	$month = 'April';
	$year = '2012';
	$total_income = "$1200.00";
	
	function toCurrency($number) {
		$curr = number_format($number, 2, '.', ',');
		return $curr;
	}
	
?>


<div>
	<p>Income Sources for <? echo $month.' - '.$year; ?></p>
</div>
<div>
	<?
	// displays income sources row by row using the for loop...
	for ($i = 0; $i < count($list_income); $i++) 
	{
		echo '<div class="item">';
		
		$item_pic = '<img class="item_pic" width="60px" height="60px" />';
		$item_title =  '<div class="item_title trebuchet_font_title">'.$list_income[$i]['title'].'</div>';
		$item_date = '<div class="item_date trebuchet_font_date">'.$list_income[$i]['date'].'</div>';
		$item_amount = '<div class="item_amount trebuchet_font_default">$'.$list_income[$i]['amount'].'</div>';
		$item_v_line = '<div class="item_vertical_line"></div>';
		$item_edit = '<img class="img_edit" width="30px" height="30px" src="media/icons/edit.png" />';
		$item_delete = '<img class="img_delete" width="30px" height="30px" src="media/icons/delete.png" />';
		$item_note = '<div class="item_note trebuchet_font_note">'.$list_income[$i]['note'].'</div>';
		
		echo $item_pic;
		echo '<div class="item_text_container" >';
		echo $item_title.$item_date.$item_amount.$item_note;
		echo '</div>';
		echo '<div class="item_options_container" >';
		echo $item_edit.$item_delete;
		echo '</div>';
		
		echo '</div>';
		echo $item_v_line;
	}	
	
	
	echo '<div id="container_total" >';
	echo '<div class="item_vertical_line"></div>';
	echo '<div id="title_total" >Total Income: </div>';
	echo '<div id="items_total" >'.$total_income.'</div>';
	echo '</div>';
	?>
</div>