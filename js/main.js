
$(function () {

	$("#start_button").click(function(){

		var input_text = $("#input_text").val();

		$.ajax({
		   	url: "proxy.php",
	   		data: {input_text: input_text} , 
			async: false,
	   		dataType: 'json',
	   		success:  function (data) {
		   		$("#return_palindrome").html("The longest palendrome is " + data.return_string)
    		} 
		}); 

	}); // input button click

});