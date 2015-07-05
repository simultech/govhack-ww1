<script type='text/javascript'>
	$('document').ready(function() {
	function rendermain() {
		var mn = $('#dyn');
		var renderel = 0;
		for(var d in data) {
			var e = data[d];
			console.log(e);
			var output = "";
			switch(e['type']) {
				case 'event':
					output = '<div class="tn"><a name="el_'+renderel+'" id="el_'+renderel+'"></a><span>'+e["text"]+'</span></div>';
					break;
				case 'large':
					var source   = $("#"+e['template']).html();
					var template = Handlebars.compile(source);
					var context = e['data'];
					output   = template(context);
					output = '<div class="row"><div class="col-md-12">'+output+'</div></div>';
					break;
				case 'split':
					var output = '<div class="row">';
					output += '<div class="col-md-6">';
					var source   = $("#"+e['war']['template']).html();
					var template = Handlebars.compile(source);
					var context = e['war']['data'];
					output += template(context);
					output += '</div><div class="col-md-6">';
					var source   = $("#"+e['home']['template']).html();
					var template = Handlebars.compile(source);
					var context = e['home']['data'];
					output += template(context);
					output += '</div></div>';
					break;
			}
			renderel+=1;
			mn.append(output);
		}
	}
	function rendernodes() {
		var nodespot = $('.nodes');
		nodespot.append($('<div class="node" data-anchor="el_2" style="margin-left:20%;"><span>Start of war</span></div>'));
		nodespot.append($('<div class="node" data-anchor="el_4" style="margin-left:40%;"><span>End of war</span></div>'));
	}
	rendermain();
	rendernodes();
	});
</script>
<div id='dyn' class='container'>

</div>