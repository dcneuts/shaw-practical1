/**
 * Created by derek on 5/19/17.
 */
$(document).ready(function () {
	$("body>nav a").on("click",function (event) {
		this
		event.preventDefault();
		$("main").load($(this).attr("href")+" main",completeFunction);
	});
//Errors will get printed to contents of Main
	function completeFunction(responseText, textStatus, request) {
		if(textStatus == "error"){
			$("main").text("An error has occurred: "+ request.status+" "+request.statusText);
		}
	}
});