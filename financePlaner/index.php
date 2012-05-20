<?php 
	$dir_header = "";
	$dir_content = "";
	$dir_footer = "";
	$dir_style = "";
	$page = "";
	$js = "";
	if(isset($_GET['page'])) {
		$page = $_GET['page'];
		
	} else {
		$page = "summary";
	}
	$dir_header = "pages/".$page."/header.php";
	$dir_content = "pages/".$page."/content.php";
	$dir_footer = "pages/".$page."/footer.php";
	$dir_style = "pages/".$page."/page.css";
	$js = "pages/".$page."/footer.js";
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Counting</title>
		<meta name="author" content="Jeeb" />
		<!-- Date: 2012-03-16 -->
		<link href="index.css"type="text/css"rel="stylesheet" />
		<script type="text/javascript" src="jQuery.js" ></script>
		<script type="text/javascript" src="<?php echo $js; ?>" ></script>
		<link href="<?php echo $dir_style; ?>" type="text/css"rel="stylesheet" />
	</head>
	<body>
				
		<div id="main">
			
			<div id="header">
				<?php 
					include $dir_header;
				 ?>
			</div>
		
			<div id="content">
				<?php 
					include $dir_content;
				 ?>
			</div>
			
			<div id="footer">
				<?php 
					include $dir_footer;
				 ?>
			</div>
		
		</div>
		
		
	</body>
</html>