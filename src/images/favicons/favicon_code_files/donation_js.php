var showDonationPanel;

$(document).ready(function() {
	$('#currency_code').change(function() {
		var currency = $('#currency_code').find(":selected").attr('title');
		$('.donation_amount_currency').html(currency);
	});

	$('.donation_amount_choice').change(function() {
		var amount = $('input[name=donation_amount]:checked').val();
		if (amount == 'other') {
			$('.donation_amount_other').fadeIn();
		}
		else {
			$('#donation_amount').val(amount);
			$('.donation_amount_other').fadeOut();
		}
	});

	$('#donation_free_amount').on('input', function() {
		$('#donation_amount').attr('value', $('#donation_free_amount').val());
		$('input[name=donation_amount]:checked').prop('checked', false);
		$('.donation_amounts label').removeClass('active');
	});

	$('#wont_donate_feedback_link').click(function() {
		$('.donation_feedback_form_content').slideDown();
	});

	showDonationPanel = function() {
		var offsetInstructions = $('.favicon_instructions_container').offset();

		var offsetContainer = $('.container').offset();
		var margin = offsetContainer.left - $('.donation_overall_container').outerWidth(true)
			- (($(document).height() > $(window).height()) ? 0 : getScrollbarWidth());

		if (margin < 0) {
			return;
		}

	  $('.donation_fallback_container').hide();

		$('.donation_overall_container').hide(function() {
			$('.donation_overall_container').css('margin-top',
				(offsetInstructions.top - $('#global-navbar').outerHeight(true)) + 'px');
			if ($('.donation_container').data('position') == 'PL') {
				$('.donation_overall_container').css('float', 'left');
				$('.donation_overall_container').css('margin-left', margin);
			}
			else {
				$('.donation_overall_container').css('float', 'right');
				$('.donation_overall_container').css('margin-right', margin);
			}

			$('.donation_overall_container').removeClass('donation_out_of_sight_container');
			$('.donation_overall_container').fadeIn();
		});
	}

	function getScrollbarWidth() {
		var outer = document.createElement("div");
		outer.style.visibility = "hidden";
		outer.style.width = "100px";
		outer.style.msOverflowStyle = "scrollbar"; // needed for WinJS apps

		document.body.appendChild(outer);

		var widthNoScroll = outer.offsetWidth;
		// force scrollbars
		outer.style.overflow = "scroll";

		// add innerdiv
		var inner = document.createElement("div");
		inner.style.width = "100%";
		outer.appendChild(inner);

		var widthWithScroll = inner.offsetWidth;

		// remove divs
		outer.parentNode.removeChild(outer);

		return widthNoScroll - widthWithScroll;
	}
});
