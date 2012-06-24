
<!-- PHP Variable Declarations -->
<?php 
	$icons_location;
	$list_income = array(
		array('title'=>'Job','date'=>'14-April-2012', 'amount'=>toCurrency(1400.25), 'note'=>'Work at so and so place'),
		array('title'=>'Job','date'=>'14-April-2012', 'amount'=>toCurrency(1400), 'note'=>'Work at so and so place'),
		array('title'=>'Job','date'=>'14-April-2012', 'amount'=>toCurrency(1400), 'note'=>'Work at so and so place'),
	);
	$month = 'April';
	$year = '2012';
	$total_income = "$1,200.00";
	
	function toCurrency($number) {
		$curr = number_format($number, 2, '.', ',');
		return $curr;
	}
	
?>


<!-- Title -->
<p id="title_month_year" class="trebuchet_font-family">Income Sources for <span id="month_year"><? echo $month.' - '.$year; ?></span></p>


<!-- Items -->
<div id="items">
	<?
	
	// displays income sources row by row using the for-loop...
	for ($i = 0; $i < count($list_income); $i++) 
	{
	
	?>			
		<table width="100%" cellspacing="0px" cellpadding="0px">
			<tr>
				<td rowspan="2" width="60px">
					<img width="60px" height="60px" src="" class="item_picture"/>
				</td>
				<td >
					<span class="item_title trebuchet_font-family"> <? echo $list_income[$i]['title']; ?> </span> <span>-</span>
					<span class="item_date trebuchet_font-family"> <? echo $list_income[$i]['date']; ?> </span>
				</td>
				<td rowspan="2" width="150px" align="right">
					<span class="item_amount trebuchet_font-family"> <? echo $list_income[$i]['amount']; ?> </span>
				</td>
				<td rowspan="2" width="10px">
					<div class="item_horizontal_seperator"></div>
				</td>
				<td rowspan="2" width="80px" align="right">
					<img width="30px" height="30px" src="<? echo $icons_location; ?>edit.png" />
					<img width="30px" height="30px" src="<? echo $icons_location; ?>delete.png" />
				</td>
			</tr>
			<tr>
				<td>
					<span class="item_note trebuchet_font-family"> <? echo $list_income[$i]['note']; ?> </span>
				</td>
			</tr>
		</table>
		<div class="item_vertical_line"></div>
	<?	
	} // end of for-loop
	?>
	
	
	<!-- New Item Table - Invisible by default -->
	<table width="100%" cellspacing="0px" cellpadding="0px">
			<tr id="item_new">
				<td rowspan="2" width="60px">
					<img width="60px" height="60px" src="" class="item_picture"/>
				</td>
				<td >
					<span class="item_title trebuchet_font-family">  </span>
					<span class="item_date trebuchet_font-family">  </span>
				</td>
				<td rowspan="2" width="150px" align="right">
					<span class="item_amount trebuchet_font-family">  </span>
				</td>
				<td rowspan="2" width="10px">
					<div class="item_horizontal_seperator"></div>
				</td>
				<td rowspan="2" width="80px" align="right">
					<img width="30px" height="30px" src="<? echo $icons_location; ?>edit.png" />
					<img width="30px" height="30px" src="<? echo $icons_location; ?>delete.png" />
				</td>
			</tr>
			<tr>
				<td>
					<span class="item_note trebuchet_font-family">  </span>
				</td>
			</tr>
		</table>
	
	
	<!-- Add Button -->
	<div id="btn_add">Add +</div>
	
	
	<!-- Total Income -->
	<div id="container_total" >
	
		<div class="item_vertical_line"></div>
		<span id="title_total" class="trebuchet_font-family">Your total income is <span id="items_total"><? echo $total_income; ?></span></span>
	
	</div>
	
</div>