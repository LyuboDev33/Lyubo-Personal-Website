$(function() {

	let form = $('#contact-form');
 
	let formMessages = $('.form-message');
 
 
   $(form).submit(function(event) {

	event.preventDefault();
	  
	  // Serializing the form data
	  let formData = $(form).serialize();
 
	// Submitting the form using AJAX
	$.ajax({
	    type: 'POST',
	    url: $(form).attr('action'),
	    data: formData
	}).done(function(response) {
	  
	    $(formMessages).removeClass('error');
	    $(formMessages).addClass('success');
 
	    $(formMessages).text(response);
 
	    $('#inputName').val('');
	    $('#inputEmail').val('');
	    $('#inputPhone').val('');
	    $('#inputMessage').val('');
	}).fail(function(data) {
	  
	    $(formMessages).removeClass('success');
	    $(formMessages).addClass('error');
 
	    if (data.responseText !== '') {
		   $(formMessages).text(data.responseText);
	    } else {
		   $(formMessages).text('Полетата са задължителни!');
	    }
	});
 
   });
 
});

