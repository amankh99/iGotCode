$(document).ready(function(){
	$("#plum").on("click",function(){
		$("#plumD").fadeIn();
		$("#elecD").fadeOut();
		$("#carpD").fadeOut();
		$("#spaD").fadeOut();
		$("#maidD").fadeOut();
	});
	$("#elec").on("click",function(){
		$("#elecD").fadeIn();
		$("#plumD").fadeOut();
		$("#carpD").fadeOut();
		$("#spaD").fadeOut();
		$("#maidD").fadeOut();
	});
	$("#carp").on("click",function(){
		$("#carpD").fadeIn();
		$("#elecD").fadeOut();
		$("#plumD").fadeOut();
		$("#spaD").fadeOut();
		$("#maidD").fadeOut();
	});
	$("#spa").on("click",function(){
		$("#spaD").fadeIn();
		$("#elecD").fadeOut();
		$("#carpD").fadeOut();
		$("#plumD").fadeOut();
		$("#maidD").fadeOut();
	});
	$("#maid").on("click",function(){
		$("#maidD").fadeIn();
		$("#elecD").fadeOut();
		$("#carpD").fadeOut();
		$("#spaD").fadeOut();
		$("#plumD").fadeOut();
	});
});