<style>
	div#bottomtimeline {
		height:100px;
		position:fixed;
		z-index:1000000;
		bottom:0;
		background:rgba(255,255,255,0.7);
		width:100%;
		border-top:1px solid #333;
	}
	div#bottomtimeline .line {
		background:#333;
		width:80%;
		height:3px;
		margin-top:50px;
		margin-left:10%;
	}
	div#bottomtimeline .node {
		background:#fff;
		width:20px;
		height:20px;
		border-radius:10px;
		border:2px solid #000;
		position:absolute;
		top:50%;
		margin-top:-9px;
		cursor: pointer; cursor: hand;
	}
	div#bottomtimeline .node:hover {
		background:#ddf;
	}
	div#bottomtimeline .node span {
		display:block;
		width:210px;
		text-align:center;
		margin-left:-100px;
		margin-top:20px;
		font-size:90%;
		font-family:"Helvetica";
		color:#000;
	}
	div#bottomtimeline .start {
		margin-left:10%;
	}
	div#bottomtimeline .end {
		margin-right:10%;
		right:0;
	}
</style>

<div id='bottomtimeline'>
	<div class='line'></div>
	<div class='start node' data-anchor="intro"><span>Introduction</span></div>
	<div class='nodes'>
		
	</div>
	<div class='end node' data-anchor="conclusion"><span>After the war</span></div>
</div>

<script type="text/javascript">
	$('.node').click(function() {
		var position = $('#'+$(this).data('anchor')).offset().top;
		console.log(position);
		$('html,body').animate({scrollTop: position},'slow');
	});
</script>