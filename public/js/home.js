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

	// Library: ScrollReveal -> https://github.com/jlmakes/scrollreveal
	window.sr = ScrollReveal();
	sr.reveal('.feature-section img', { duration: 1000, delay: 500 });
	sr.reveal('.title-icon-section', { duration: 1000 });
	sr.reveal('.feature-section .text-section p', { duration: 1000 });

});