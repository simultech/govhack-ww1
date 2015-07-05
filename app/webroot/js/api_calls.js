
$('document').ready(function() {
    console.log("STARTING");
    //getsoldierportraits();
    getposters();
});

function getsoldierportraits() {
	var url = 'http://atwarandathome.com/api/soldierportraits';
	$.ajax({
		url: url,
	})
	.done(function(stories) {
    	for(var story in stories) {
    		console.log(stories[story]['Qldsoldierportrait']);
    		var source   = $("#el-soldier").html();
			var template = Handlebars.compile(source);
			var context = {title: stories[story]['Qldsoldierportrait']['title'], body: stories[story]['Qldsoldierportrait']['description'], img: stories[story]['Qldsoldierportrait']['500pixel']};
			var html    = template(context);
	    	$('#koko').append($(html));
    	}
	});
}

function getposters() {
	var url = 'http://atwarandathome.com/api/posters';
	$.ajax({
		url: url,
	})
	.done(function(stories) {
    	for(var story in stories) {
    		var source   = $("#el-poster").html();
			var template = Handlebars.compile(source);
			var context = stories[story]['posters'];
			var html    = template(context);
	    	$('#koko').append($(html));
    	}
	});
}

function getdemographics() {
	var url = 'http://atwarandathome.com/api/demographics';
	$.ajax({
		url: url,
	})
	.done(function(stories) {
    	for(var story in stories) {
    		var source   = $("#el-demographic").html();
			var template = Handlebars.compile(source);
			var context = stories[story]['demoinfo'];
			var html    = template(context);
	    	$('#koko').append($(html));
    	}
	});
}

function getawmembarkment() {
    var url = "https://www.awm.gov.au/direct/data.php?key=ww1hack2015&q=embarkment%20AND%20type:%22Photograph%22";
    url += "&start=" + Math.floor((Math.random() * 17767));
    
}

function getawmgallipoli() {
    var url = "https://www.awm.gov.au/direct/data.php?key=ww1hack2015&q=gallipoli%20AND%20type:%22Photograph%22";
    url += "&start=" + Math.floor((Math.random() * 8180));
    
}

function getawmsoldier() {
    var url = "https://www.awm.gov.au/direct/data.php?key=ww1hack2015&q=soldier%20AND%20type:%22Photograph%22";
    url += "&start=" + Math.floor((Math.random() * 22082));
    
}

function getawmmiddleeast() {
    var url = "https://www.awm.gov.au/direct/data.php?key=ww1hack2015&q=%22middle%20east%22%20AND%20type:%22Photograph%22";
    url += "&start=" + Math.floor((Math.random() * 15238));
    
}

function getawmqueensland() {
    var url = "https://www.awm.gov.au/direct/data.php?key=ww1hack2015&q=queensland%20AND%20type:%22Photograph%22";
    url += "&start=" + Math.floor((Math.random() * 12402));
    
}

function getawmfrancebattlefield() {
    var url = "https://www.awm.gov.au/direct/data.php?key=ww1hack2015&q=france%20AND%20battlefield%20AND%20type:%22Photograph%22";
    url += "&start=" + Math.floor((Math.random() * 300));
    
}

function getawmwomenslandarmy() {
    var url = "https://www.awm.gov.au/direct/data.php?key=ww1hack2015&q=%22Women%27s%20Land%20Army%22%20AND%20type:%22Photograph%22";
    url += "&start=" + Math.floor((Math.random() * 192));
    
}

