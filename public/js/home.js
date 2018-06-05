function newsletterSubmit(firstname, lastname, email) {
	var sendData = {
		firstname: firstname,
		lastname: lastname,
		email: email
	};

	$.post("newsletter", sendData, function(result) {

		if (result == 'Success') 
		{
			$("#newsletter").addClass("success");
			$(".middle-section button[type='submit']").text("Success").attr("data-submitted", "success");
		}
		else
		{
			$("#newsletter").addClass("error");
		}
		
	});
}

$(document).ready(function() {
	$('#newsletter').submit(function () {
		if ($(".middle-section button[type='submit']").attr("data-submitted") != "success") 
		{
			newsletterSubmit($("#first-name").val(), $("#last-name").val(), $("#email").val());
		}
		
		return false;
	});
});