$(document).ready(function () {
	//ajax navbar anchors
	$("body>nav a").on("click",function (event) {
		//caches the function with reference to anchor tag
		$target = $(this);
		event.preventDefault();
		//Number is in milliseconds
		//Callback function after time is up
		$("main").fadeOut(200,function () {
			//use the cache from above for callback
			loadMain($target);
		});
	});
	function loadMain($element) {
		$("main").load($element.attr("href")+" main",completeFunction);
	}
	
//Errors will get printed to contents of Main
	function completeFunction(responseText, textStatus, request) {
		if(textStatus == "error"){
			$("main").text("An error has occurred: "+ request.status+" "+request.statusText);
		} else {
			$("main").fadeIn(200);
		}
	}
});