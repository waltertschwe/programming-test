$(document).ready(function(){
	$('#color-group li').on("click", function(){
		colorId = $(this).attr('data-id');
		alert(colorId);
	});
});		
