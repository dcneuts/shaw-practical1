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

	//ajax search bar functionality to override default html behaviors
	//instructors note that in real-world scenario, class or id would be targeted, not generic
	$("body>nav form").on("click", function (event) {
		//prevent default behaviors
		event.preventDefault();
		//makes permanent reference to form once clicked
		$target = $(this);
		$("main").fadeOut(300,function () {
			loadSearch($target);
		});
	});
	function loadSearch($element){
		//find get variables
		//make data object exist within the function to persist
		data = {};
		//to use the below function, first is always index for array and then name of elements
		$element.find("input").each(function(index,input){
			//matches the format on line 32
			data[input.name] = input.value;
		});
		$("main").load($element.attr("action")+" main",data,completeFunction);
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