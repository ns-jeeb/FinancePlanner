<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<title><?php echo $title; ?></title>
		<meta name="author" content="Jeeb" />
		<!-- Date: 2012-03-16 -->		
		<?php foreach($styles as $file ) echo HTML::style($file),PHP_EOL ?>
		<?php foreach($scripts as $file) echo HTML:: script($file),PHP_EOL ?>
		
	</head>
	<body>
		
		<?php echo $header;?>
		
		<?php echo $content; ?>
			
		<?php echo $footer;?>	 
		
	</body>
</html>