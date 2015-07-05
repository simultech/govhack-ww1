<script id="el-abclocalphoto" type="text/x-handlebars-template">
	<section>
			<div class="col-sm-6 col-md-7">
						<img alt="" class="img-responsive" src="{{identifier}}">
			</div>
			<div class="col-sm-6 col-md-5">
				<h3 class = "header">{{title}}</h3>
				<p>{{caption}}</p>
				<p>Location: {{location}}</p>
				<p>Published: {{d}}</p>

			</div>
			
	</section>
</script>

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
		    <ul class="list-icon">
		    	<li>Published: {{d}}</li>
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
				<h3 class = "header1" style="color:#5baf5a">{{fdate}}</h3>
				<div class = "fa fa-group" style="color:#5baf5a; font-size:250%; margin-bottom:5px;"></div>
					<h3 class="value">{{caption}}</h3>
				</div>
			</div>
	</section>
</script>

<script id="el-demographic-people-female" type="text/x-handlebars-template">
	<section>
			<div class="col-sm-12 col-md-12 text-center">	
				<h3 class = "header1" style="color:#e85094">{{fdate}}</h3>
				<div class = "value fa fa-female" style="color:#e85094; font-size:250%; margin-bottom:5px;"></div>
					<h3 class="value">{{caption}}</h3>
				</div>
			</div>
	</section>
</script>

<script id="el-demographic-people-male" type="text/x-handlebars-template">
	<section>
			<div class="col-sm-12 col-md-12 text-center">	
				<h3 class = "header1" style="color:#5bb6d1;">{{fdate}}</h3>
				<div class = "value fa fa-male" style="color:#5bb6d1; font-size:250%; margin-bottom:5px;"></div>
					<h3 class="value">{{caption}}</h3>
				</div>
			</div>
	</section>
</script>

<script id="el-demographic-proportion" type="text/x-handlebars-template">
	<section>
			<div class="col-sm-12 col-md-12 text-center">	
				<h3 class = "header1" style="color:#b28146;">{{fdate}}</h3>
				<div class = "value fa fa-pied-pipper" style="color:#b28146; font-size:250%; margin-bottom:5px;"></div>
					<h3 class="value">{{caption}}</h3>
				</div>
			</div>
	</section>
</script>

<script id="el-demographic-decrease" type="text/x-handlebars-template">
	<section>
			<div class="col-sm-12 col-md-12 text-center">	
				<h3 class = "header1" style="color:#ce514c;">{{fdate}}</h3>
				<div class = "value fa fa-long-arrow-down" style="color:#ce514c; font-size:250%; margin-bottom:5px;"></div>
					<h3 class="value">{{caption}}</p></h3>
				</div>
				<h3 class="value">{{caption}}</h3>
			</div>
	</section>
</script>

<script id="el-demographic-increase" type="text/x-handlebars-template">
	<section>
			<div class="col-sm-12 col-md-12 text-center">	
				<h3 class = "header1" style="color:#9ac54f;">{{fdate}}</h3>
				<div class = "value fa fa-long-arrow-up" style="color:#9ac54f; font-size:250%; margin-bottom:5px;"></div>
					<h3 class="value">{{caption}}</h3>
				</div>
				<h3 class="value">{{caption}}</h3>
			</div>
	</section>
</script>

<script id="el-demographic-event" type="text/x-handlebars-template">
	<section>
			<div class="col-sm-12 col-md-12 text-center">	
				<h3 class = "header1" style="color:#fff000 ;">{{fdate}}</h3>
				<div class = "value fa fa-star" style="color:#fff000; font-size:250%; margin-bottom:5px;"></div>
					<h3 class="value">{{caption}}</h3>
				</div>
			</div>
	</section>
</script>

<script id="el-demographic-indigenous" type="text/x-handlebars-template">
	<section>
			<div class="col-sm-12 col-md-12 text-center">	
				<h3 class = "header1" style="color:#fff000;">{{fdate}}</h3>
				<div class = "value fa fa-star" style="color:#fff000; font-size:250%; margin-bottom:5px;""></div>
					<h3 class="value">{{caption}}</h3>
				</div>
			</div>
	</section>
</script>

<script id="el-demographic-proportion-increase" type="text/x-handlebars-template">
	<section>
			<div class="col-sm-12 col-md-12 text-center">	
				<h3 class = "header1" style="color:#9ac54f;">{{fdate}}</h3>
				<div class = "value fa fa-long-arrow-up" style="color:#9ac54f; font-size:250%; margin-bottom:5px;"></div>
					<h3 class="value">{{caption}}</h3>
				</div>
			</div>
	</section>
</script>

<script id="el-demographic-proportion-decrease" type="text/x-handlebars-template">
	<section>
			<div class="col-sm-12 col-md-12 text-center">	
				<h3 class = "header1" style="color:#ce514c;">{{fdate}}</h3>
				<div class = "value fa fa-long-arrow-down" style="color:#ce514c; font-size:250%; margin-bottom:5px;"></div>
					<h3 class="value">{{caption}}</h3>
				</div>
			</div>
	</section>
</script>

<script id="el-newspaper" type="text/x-handlebars-template">
	<section>
			<div class="col-sm-12 col-md-12 text-center">	
				<h3 class = "header2">{{formal}}</h3>
				<a href="{{1000pixel}}" target="_blank"><img alt="" class="img-responsive" src="{{500pixel}}"></a>
			</div>
	</section>
</script>