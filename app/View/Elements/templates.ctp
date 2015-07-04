<script id="el-soldier" type="text/x-handlebars-template">
	<section>
		<div class="container">
			<div class="col-sm-6 col-md-7">
			    <div>
			    	<div>
			    		<img alt="" class="img-responsive" src="{{img}}">
			    	</div>
			    </div>
			</div>
			<div class="col-sm-6 col-md-5">
			    <h3 class = "header">{{title}}</h3>
			    <p>{{body}}</p>
			    <p>Collection of "In Memoriam" cards with photographs of West Australians killed during the First World War, with brief biographical notes.</p>
			    <ul class="list-icon">
			    	<li>Published: 1917</li>
			    </ul>
			</div>
		</div>
	</section>
</script>

<script id="el-poster" type="text/x-handlebars-template">
	
<section>
	<div class="container">
		<div>
			<div class="col-sm-6 col-md-7">
				<h3 class = "header">{{title}}</h3>
				<p>{{description}}</p>
				<p>{{creator}}</p>
				<ul class="list-icon">
					<li>Published: {{d}}</li>
				</ul>
			</div>
			<div class="col-sm-6 col-md-5">
				<div>
					<div>
						<img alt="" class="img-responsive" src="{{identifier}}">
					</div>
				</div>
			</div>
	</div>
</section>
</script>