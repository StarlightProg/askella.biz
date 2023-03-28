$(document).ready(() => {
	function redirect() {
	  window.location.replace('../main');
	}

	let availableScreenWidth = window.innerWidth;
	let availableScreenHeight = window.innerHeight;
	$(".bg__video").css("width",availableScreenWidth);
	$(".bg__video").css("height",availableScreenHeight);
	$(".main").css("width",availableScreenWidth);
	$(".main").css("height",availableScreenHeight);

	$( window ).resize(function() {
		availableScreenWidth = window.innerWidth;
		availableScreenHeight = window.innerHeight;
		$(".bg__video").css("width",availableScreenWidth);
		$(".bg__video").css("height",availableScreenHeight);
		$(".main").css("width",availableScreenWidth);
		$(".main").css("height",availableScreenHeight);
	  //$( "body" ).prepend( "<div>" + $( window ).width() + "</div>" );
	});
	setTimeout(redirect,3000);
});