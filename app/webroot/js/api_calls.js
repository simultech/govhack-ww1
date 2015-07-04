
$('document').ready(function() {
    console.log("STARTING");
    getsoldierportraits();
});

function getsoldierportraits() {
	var url = 'http://atwarandathome.com/api/soldierportraits';
	$.ajax({
		url: url,
	})
	.done(function(stories) {
    	for(var story in stories) {
    	
    		var source   = $("#el-soldier").html();
			var template = Handlebars.compile(source);
			var context = {title: stories[story]['Qldsoldierportrait']['title'], body: stories[story]['Qldsoldierportrait']['description']};
			var html    = template(context);
	    	$('#koko').append($(html));
    	}
	});
}

/**
 * Nothing fancy, general function for querying an API.
 * 
 * @param {String} url Base URL for API request.
 * @param {Function} callback Callback function to process returned data.
 * @param {JSON} parameters (Optional) JSON object of parameter key/value pairs.
 * @returns {undefined}
 */
function queryAPI(url, callback, parameters) {
    
    //append parameters if available
    if (typeof parameters !== "undefined") {
        var parts = [];
        for (var key in parameters) {
            if (parameters.hasOwnProperty(key)) {
                parts.push(
                        encodeURIComponent(key)
                        + '='
                        + encodeURIComponent(parameters[key])
                );
            }
        }
        if (parts.length > 0) url += "?" + parts.join('&');
    }
    
    //ajax yo
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState === 4 && xmlhttp.status === 200) {
            return callback(xmlhttp);
        }
        else if (xmlhttp.readyState === 4 && xmlhttp.status === 404) {
            console.log("API request returned status 404: " + url);
            return;
        }
    };
    
    xmlhttp.open("GET", url, true);
    xmlhttp.send();
}


