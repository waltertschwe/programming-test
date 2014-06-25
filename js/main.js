$(document).ready(function(){
	$('#color-group li').on("click", function(){
		colorId = $(this).attr('data-id');
		alert(colorId);
		$.ajax({
   			 type: 'GET',
      		 dataType:'json',
    		 url: 'getvotes.php',
   			 data: {"colorId" : colorId}, 
   			 success: function(responseData) {
   			 	var parsedData = JSON.parse(responseData);
   			 	alert(parsedData);
   			 	alert("success");
   			 },
	   		 error: function(XMLHttpRequest, textStatus, errorThrown) {
	   		 	 alert("fail");
	      		// TODO: log errorThrown to php log or other logger  
	   		 }
	 	}); 
	});
});		
