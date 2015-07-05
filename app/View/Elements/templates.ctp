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

<script id="el-demographic-people" type="text/x-handlebars-template">
	<section>
			<div class="col-sm-12 col-md-12 text-center">	
				<h3 class = "header1">{{date}}</h3>
				<div class = "value fa fa-group"></div>
					<h3 class="value">{{caption}}</p></h3>
				</div>
			</div>
	</section>
</script>

<script id="el-demographic-people-female" type="text/x-handlebars-template">
	<section>
			<div class="col-sm-12 col-md-12 text-center">	
				<h3 class = "header1">{{date}}</h3>
				<div class = "value fa-female"></div>
					<h3 class="value">{{caption}}</p></h3>
				</div>
			</div>
	</section>
</script>

<script id="el-demographic-people-male" type="text/x-handlebars-template">
	<section>
			<div class="col-sm-12 col-md-12 text-center">	
				<h3 class = "header1">{{date}}</h3>
				<div class = "value fa-male"></div>
					<h3 class="value">{{caption}}</p></h3>
				</div>
			</div>
	</section>
</script>

<script id="el-demographic-proportion" type="text/x-handlebars-template">
	<section>
			<div class="col-sm-12 col-md-12 text-center">	
				<h3 class = "header1">{{date}}</h3>
				<div class = "value fa fa-pied-pipper"></div>
					<h3 class="value">{{caption}}</p></h3>
				</div>
			</div>
	</section>
</script>

<script id="el-demographic-decrease" type="text/x-handlebars-template">
	<section>
			<div class="col-sm-12 col-md-12 text-center">	
				<h3 class = "header1">{{date}}</h3>
				<div class = "value fa-long-arrow-down"></div>
					<h3 class="value">{{caption}}</p></h3>
				</div>
				<h3 class="value">{{caption}}</p></h5>
			</div>
	</section>
</script>

<script id="el-demographic-increase" type="text/x-handlebars-template">
	<section>
			<div class="col-sm-12 col-md-12 text-center">	
				<h3 class = "header1">{{date}}</h3>
				<div class = "value fa-long-arrow-up"></div>
					<h3 class="value">{{caption}}</p></h3>
				</div>
				<h3 class="value">{{caption}}</p></h5>
			</div>
	</section>
</script>

<script id="el-demographic-event" type="text/x-handlebars-template">
	<section>
			<div class="col-sm-12 col-md-12 text-center">	
				<h3 class = "header1">{{date}}</h3>
				<div class = "value fa fa-group"></div>
					<h3 class="value">{{caption}}</p></h3>
				</div>
			</div>
	</section>
</script>

<script id="el-demographic-indigenous" type="text/x-handlebars-template">
	<section>
			<div class="col-sm-12 col-md-12 text-center">	
				<h3 class = "header1">{{date}}</h3>
				<div class = "value fa fa-star"></div>
					<h3 class="value">{{caption}}</p></h3>
				</div>
			</div>
	</section>
</script>

<script id="el-demographic-proportion-increase" type="text/x-handlebars-template">
	<section>
			<div class="col-sm-12 col-md-12 text-center">	
				<h3 class = "header1">{{date}}</h3>
				<div class = "value fa-long-arrow-up"></div>
					<h3 class="value">{{caption}}</p></h3>
				</div>
			</div>
	</section>
</script>

<script id="el-demographic-proportion-decrease" type="text/x-handlebars-template">
	<section>
			<div class="col-sm-12 col-md-12 text-center">	
				<h3 class = "header1">{{date}}</h3>
				<div class = "value fa-long-arrow-down"></div>
					<h3 class="value">{{caption}}</p></h3>
				</div>
			</div>
	</section>
</script>

<script id="el-newspaper" type="text/x-handlebars-template">
	<section>
			<div class="col-sm-12 col-md-12 text-center">	
				<h3 class = "header1">{{formal}}</h3>
				<a href="{{1000pixel}}" target="_blank"><img alt="" class="img-responsive" src="{{500pixel}}"></a>
			</div>
	</section>
</script>