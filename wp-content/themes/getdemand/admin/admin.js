jQuery(document).ready(function($) {

		var full = $('input:radio[value="full"]:checked');
		var left = $('input:radio[value="left"]:checked');
		var right = $('input:radio[value="right"]:checked');
		var testimonial = $('input:radio[value="testimonial"]:checked');

		if ( $(full).val() == 'Yes') {
			$('.full-desc').css('display', 'block');
			$('.panel-sidebar').css('display', 'block');
		}

		$('input:radio[name="case_study[portfolio][0]"]').click(function() {
			var value = $(this).val();
			/*if (value === "testimonial") {
				$('.image').hide('fast');
			} else {
				$('.image').show('fast');
			}
			if (value === "full") {
				$('.copy').hide('fast');
			} else {
				$('.copy').show('fast');
			}*/
		});


});//end document