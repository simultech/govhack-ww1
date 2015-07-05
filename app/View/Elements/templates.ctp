<script id="el-soldier" type="text/x-handlebars-template">
	<section>
		<div class="col-sm-6 col-md-7">
		    <div>
		    	<div>
		    		<img alt="" class="img-responsive" src="http://www.oddballs.co.uk/images/StageBalls.jpg">
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
	</section>
</script>

<script id="el-poster" type="text/x-handlebars-template">

	<section>
			<div class="col-sm-6 col-md-7">
				<h3 class = "header">{{title}}</h3>
				<p>{{description}}</p>
				<p>{{creator}}</p>
				<ul class="list-icon">
					<li>Published: {{d}}</li>
				</ul>
			</div>
			<div class="col-sm-6 col-md-5">
						<img alt="" class="img-responsive" src="{{identifier}}">
			</div>
	</section>
</script>

<script id="el-demographic" type="text/x-handlebars-template">	
	<section>
		<div class="container">
			<div class="col-sm-12 col-md-12 text-center">	
				<h3 class = "header1">{{date}}</h3>
				<div class = "value fa fa-group"></div>
				<h3 class="value">{{caption}}</p></h5>
			</div>
		</div>
	</section>
</script>

<script id="el-soldier" type="text/x-handlebars-template">
	<section>
		<div class="container">
			<div class="col-sm-6 col-md-7">
				<img alt="" class="img-responsive" src="{{500pixel}}">
			</div>
			<div class="col-sm-6 col-md-5">
				<h3 class = "header">{{title}}</h3>
				<p>{{description}}</p>
				<ul class="list-icon">
					<li>Published: {{date}}</li>
				</ul>
			</div>
		</div>
	</section>
</script>