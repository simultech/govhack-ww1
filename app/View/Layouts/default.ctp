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
	    	padding:10px;
	    	position:absolute;
	    	width:100%;
	    	height:100%;
    	}
    	#header h1 {
	    	font-family: Garamond, Baskerville, 'Baskerville Old Face', 'Hoefler Text', 'Times New Roman', serif;
	    	font-size:600%;
	    	margin-top:30%;
	    	margin-bottom:0px;
    	}
    	#timeline {
	    	display:none;
    	}
    	#bgvidwrapper {
	    	position:absolute;
	    	width:100%;
	    	overflow:hidden;
	    	z-index:0;
	    	top:0;
	    	left:0;
	    	bottom:0;
    	}
    	#bgvid {
    		width:100%;
	    	opacity:0.4;
    	}
    	body, html {
	    	height:100%;
    	}
    	.timeline_header div div {
	    	background:orange;
	    	font-family: Garamond, Baskerville, 'Baskerville Old Face', 'Hoefler Text', 'Times New Roman', serif;
	    	text-align:center;
	    	font-size:400%;
	    	border-top:1px solid #000;
	    	height:200px;
	    	padding-top:100px;
	    	text-shadow: 0px 0px 4px black;
    	}
    	.timeline_header div .away_head {
    		background:#[UIColor colorWithHue:0.087 saturation:0.472 brightness:0.557 alpha:1];
	    	background-image:url('https://upload.wikimedia.org/wikipedia/commons/c/cb/Australian_9th_and_10th_battalions_Egypt_December_1914_AWM_C02588.jpeg');
    	}
    	.timeline_header div .home_head {
	    	background-image:url('http://anzaccentenary.vic.gov.au/wp-content/uploads/2013/10/Banner-Melbourne%E2%80%99s-Swanston-street-in-1914-%E2%80%93-calm-and-confident.jpg');
    	}
    </style>
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
			<div class="tnline"></div>
			<div class="tn"><span>1914 - Start of war</span></div>
			<div class="container timeline_header">
				<div class="row">
					<div class="col-md-6 away_head">At War</div>
					<div class="col-md-6 home_head">At Home</div>
				</div>
			</div>
			<div class="tn"><span>1914 - Start of war</span></div>
			<div class="container">
				<div class="row">
					<div class="col-md-12 large_event">Big event</div>
				</div>
				<div class="row">
					<div class="col-md-6 home_event">Home</div>
					<div class="col-md-6 away_event">Away</div>
				</div>
			</div>
			<div class="tn"></div>
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
