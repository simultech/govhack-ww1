<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('bootstrap.min');
		echo $this->Html->css('bootstrap-theme.min');
		echo $this->Html->css('font-awesome.min');
		echo $this->Html->css('grayscale');

		echo $this->Html->script('jquery-1.11.3.min');		
		echo $this->Html->script('bootstrap.min');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
	<link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
</head>
<body>
	<div id="container">
		<div id="header">
			<h1>ww1</h1>
		</div>
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			<p>Created by Whatamellon - Govhack 2015</p>
		</div>
	</div>
	<?php /*echo  $this->element('sql_dump'); */	?>
</body>
</html>
