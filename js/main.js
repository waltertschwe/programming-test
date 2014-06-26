$(document).ready(function(){
	$('#color-group li').on("click", function(){
		colorId = $(this).attr('data-id');
		$.ajax({
   			 type: 'GET',
      		 dataType:'json',
    		 url: 'getvotes.php',
   			 data: {"colorId" : colorId}, 
   			 success: function(responseData) {
   			 	$("#total-"+colorId).empty();
   			 	var total = 0;
   			 	$.each(responseData, function(index, value) {
   			 		var jsonValue = parseInt(value);
   			 	 	total += jsonValue;
		        });
		        $("#total-"+colorId).append(total);
   			 },
	   		 error: function(XMLHttpRequest, textStatus, errorThrown) {
	      		// TODO: log errorThrown to php log or other logger  
	   		 }
	 	}); 
	});
});		
