<script type='text/javascript'>
	$('document').ready(function() {
	function rendermain() {
		var mn = $('#dyn');
		var renderel = 0;
		for(var d in data) {
			var e = data[d];
			console.log(e);
			var output = "";
			console.log(e);
			switch(e['type']) {
				case 'event':
					output = '<div class="space"><div class="tn"><a name="el_'+renderel+'" id="el_'+renderel+'"></a><span>'+e["text"]+'</span></div></div>';
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
		var cnt = 0;
		for(var d in data) {
			cnt += 1;
		}
		var nodespot = $('.nodes');
		var newcnt = 0;
		for(var d in data) {
			var e = data[d];
			var pos = newcnt/cnt*60+20;
			console.log(pos);
			if(e['type'] == 'event') {
				nodespot.append($('<div class="node" data-anchor="el_'+newcnt+'" style="margin-left:'+pos+'%;"><span>'+e['text']+'</span></div>'));
			}
			newcnt += 1;
		}
	}
	rendermain();
	rendernodes();
	});
</script>
<div id='dyn' class='container'>

</div>