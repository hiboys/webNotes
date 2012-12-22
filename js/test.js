$(document).ready(function(){
	$("#picture").click(function(){
		window.alert("this is a click event used by jquery!");
	});
	$("#login").click(function(){
		$('form').submit();
	});
});
