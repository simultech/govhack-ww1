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
		echo $this->Html->css('style1');

		echo $this->Html->script('jquery-1.11.3.min');		
		echo $this->Html->script('bootstrap.min');
        echo $this->Html->script('api_calls');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/3.0.1/handlebars.js"></script>
	<link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
</head>
<body>
	<div id="container" style="height:100%;">
		<div id="header">
		<div id='bgvidwrapper'>
		<video autoplay loop poster="polina.jpg" id="bgvid">
			<source src="/files/video/soldier_and_sweetheart.mp4" type="video/mp4">
		</video>
		</div>
		
			<h1>At war and at home</h1>
			<h2>The great war - it tore us apart but it brought us together</h2>
		</div>
		<div id="titlefix">

		</div>
		<div id="intro">
			<?php echo $this->element('intro'); ?>
		</div>
		<div id="tailor">
			<?php echo $this->element('tailor'); ?>
		</div>
		<div id="main">
		<div id='koko'>
			<?php echo $this->element('data'); ?>
			<?php echo $this->element('render'); ?>
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
	<script type="text/javascript">
	$(window).on("scroll", function() {
	    var scrollPos = $(window).scrollTop();
	    if (scrollPos <= $(window).height()) {
	        $("#timeline").fadeOut();
	    } else {
	        $("#timeline").fadeIn();
	    }
	});
	</script>
	<?php /*echo  $this->element('sql_dump'); */	?>
	<?php echo $this->element('templates'); ?>
</body>
</html>
