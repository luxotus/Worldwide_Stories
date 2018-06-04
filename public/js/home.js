function newsletterSubmit(firstName, lastName, email) {
	var sendData = {
		firstName: firstName,
		lastName: lastName,
		email: email
	};

	$.post("newsletter", sendData, function(result) {
		console.log(result);
	});
}

$(document).ready(function() {
	$('#newsletter').submit(function () {
		newsletterSubmit($("#first-name").val(), $("#last-name").val(), $("#email").val());
		return false;
	});
});