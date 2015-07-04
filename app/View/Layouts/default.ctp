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
		echo $this->Html->css('style');

		echo $this->Html->script('jquery-1.11.3.min');		
		echo $this->Html->script('bootstrap.min');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
	<link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <style>
    	.large_event {
	    	height:200px;
	    	background:green;
    	}
    	.home_event {
	    	height:100px;
	    	background:blue;
    	}
    	.away_event {
	    	height:100px;
	    	background:red;
    	}
    	#header {
	    	text-align:center;
	    	padding:100px;
    	}
    	#header h1 {
	    	font-family: Garamond, Baskerville, 'Baskerville Old Face', 'Hoefler Text', 'Times New Roman', serif;
	    	font-size:300%;
    	}
    </style>
</head>
<body>
	<div id="container">
		<div id="header">
			<h1>At war and at home</h1>
			<h2>The great war - it tore us apart but it brought us together</h2>
		</div>
		<div id="intro">
			Intro
		</div>
		<div id="timeline">
			<div class="container">
				<div class="row">
					<div class="col-md-12 large_event">Big event</div>
				</div>
				<div class="row">
					<div class="col-md-6 home_event">Home</div>
					<div class="col-md-6 away_event">Away</div>
				</div>
			</div>
			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
				<div id="conclusion">
			Conclusion
		</div>
		<div id="footer">
			<p>Created by Whatamellon - Govhack 2015</p>
		</div>
		<div id='timeline'>
			<?php echo $this->element('timeline'); ?>
		</div>
	</div>
	<?php /*echo  $this->element('sql_dump'); */	?>
</body>
</html>
