$(document).ready(function(){
	$('#color-group').on("click", "li", function(){
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
		        $("#total-"+colorId).attr('total-clicked', total);
		        $("#total-"+colorId).append(total);
   			 },
	   		 error: function(XMLHttpRequest, textStatus, errorThrown) {
	      		// TODO: log errorThrown to php log or other logger  
	   		 }
	 	}); 
	 	return false;
	});
	$('#tally').on("click", function(){
		var totalVal = 0;	
		var listItems = $("#votes li");
		listItems.each(function(li) {
    		if($(this).attr('total-clicked')) {
    			var total = parseInt(($(this).attr('total-clicked')));
    			totalVal += total;
    		}
		});
		$("#total-value").empty();
		$("#total-value").append("<b>" + totalVal + "</b>");
		return false;
	});
});		
