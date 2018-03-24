                                

jQuery(function ($) { "use strict";
	
	   
        $('#contact_submit_login').click(function (e) {
                
		e.preventDefault();

		var error = false;
		var name = $('#name').val();
		var pass = $('#pass').val();

		if (name.length == 0) {
			var error = true;
			$('#name').css("border-color", "#D8000C");
		} else {
			$('#name').css("border-color", "#666");
		}
		if (pass.length == 0 ) {
			var error = true;
			$('#pass').css("border-color", "#D8000C");
		} else {
			$('#pass').css("border-color", "#666");
		}

		if (error == false) {
			
                        $('#contact-form-login').submit();
		}
	});


});

