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
		<div id="intro"><a name="intro"></a>
			<?php echo $this->element('intro'); ?>
		</div>
		<div id="tailor">
			<?php echo $this->element('tailor'); ?>
		</div>
		<div id="main">
		<div id='koko'>
		<div id='jojo'>
			<?php echo $this->element('data'); ?>
			<?php echo $this->element('render'); ?>
		</div>
		</div>
			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
				<div id="conclusion"><a name="conclusion"></a>
			<p>Most Australians are fortunate, we have never experienced a war - let alone a World War. With the 100th anniversary of the First World War, it is important that we draw from our history… learn from our ancestors' past... and understand, on a deeply personal level, why war tears us apart, and how it has drawn us together into a stronger international community.
“Lest we forget” and become divided again...</p>
			<img src='/img/Logo-05.png' />
		</div>
		<div id="footer">
			<p class='right'><a href="https://github.com/simultech/govhack-ww1" target="_blank">Open Source on Github</a></p>
			<p>Created by Whatamellon - Govhack 2015</p>
		</div>
		<div id='timeline'>
			<?php echo $this->element('timeline'); ?>
		</div>
		<?php echo $this->element('map'); ?>
	</div>
	<script type="text/javascript">
	var maploaded = false;
	$(window).on("scroll", function() {
	    var scrollPos = $(window).scrollTop();
	    if (scrollPos <= $(window).height()*2) {
	        $("#timeline").fadeOut();
	        $("#bgvid").prop('muted', false);
	    } else {
	    	$("#bgvid").prop('muted', true);
	        $("#timeline").fadeIn();
	        if(!maploaded) {
		        mapload();
		        maploaded = true;
	        }
	    }
	});
	</script>
	<?php /*echo  $this->element('sql_dump'); */	?>
	<?php echo $this->element('templates'); ?>
</body>
</html>
