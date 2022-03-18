
function postFeedbackForm(form) {
	form.find('button').html('Submitting...');
	form.find('button').attr('disabled', 'disabled');
	
	var paramString = [];
	form.find('input, textarea').each(function() {
		if (($(this).attr('type') == 'radio')) {
			if ($(this).is(':checked')) {
				paramString.push($(this).attr('name') + '=' + $(this).val());
			}
		}
		else {
			var v = ($(this).attr('type') == 'checkbox')
				? $(this).is(':checked')
				: $(this).val();
			paramString.push($(this).attr('name') + '=' + v);
		}
	});
	
	$.ajax({
		url: '/feedback/post_feedback.php?' + paramString.join('&')
	}).done(function() {
		form.fadeOut(function() {
			form.html('<p class="lead">Thank you!</p>');
			form.fadeIn();
		});
	});
}

$(document).ready(function() {
	$('.feedback_form').each(function() {
		var f = $(this);
		f.find('button').click(function(e) {
			e.preventDefault();
			postFeedbackForm(f);
		});
	});
});
