

$("#form").submit(function(){
	$.ajax({
		type: "POST",
		url: "mail.php",
		data: $(this).serialize()
	}).done(function(){
		$.magnificPopup.close();}, 1000);
});
return false;
});