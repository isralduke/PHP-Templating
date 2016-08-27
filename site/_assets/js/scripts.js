

// these functions prevent the form from being submitted before the ReCaptcha is satisfied
	function capenable() {
		$('#submit').html('submit');
		$('#submit').removeAttr('disabled');
	}
	function capdisable() {
		$('#submit').attr('disabled', true);
		$('#submit').html('are you human?');
	}


// give feedback
	function confirm() {
		
		//$("#form").get(0).reset();
		// a <p> tag or something with a thank you message
		$("#form").slideUp('fast');
		$('.confirmation').slideToggle('slow');
		$('#form').ajaxForm();
	}

	capdisable();


	$('#submit').click(function() 
	{
		confirm();
		

	});

lightGallery(document.getElementById('lightgallery'), {
	download:false
});
