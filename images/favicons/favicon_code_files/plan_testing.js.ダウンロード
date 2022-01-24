var slideDuration = 100;

$(document).ready(function() {
  var plans = $('.plan-testing-form');

  plans.each(function(plan) {
    var plan = $(this);

    plan.find('.btn-approve-plan').click(function() {
      plan.find('input[name="plan-acceptance"]').val('acceptedAsIs');
      plan.find('.yes-or-no-form').slideUp(slideDuration);
      postTestFormAndThanks(plan);
    });

    plan.find('.btn-submit').click(function(e) {
      plan.find('.intermediate-form').slideUp(slideDuration);
      postTestFormAndThanks(plan);
    });

    plan.find('.btn-reject-plan').click(function() {
      plan.find('.yes-or-no-form').slideUp(slideDuration);
      plan.find('.why-no-form').slideDown(slideDuration);
    });

    plan.find('.btn-not-interested').click(function() {
      plan.find('input[name="plan-acceptance"]').val('notInterested');
      plan.find('.why-no-form').slideUp(slideDuration);
      plan.find('.other-features-form').slideDown(slideDuration);
    });

    plan.find('.btn-too-expensive').click(function() {
      plan.find('input[name="plan-acceptance"]').val('tooExpensive');
      plan.find('.why-no-form').slideUp(slideDuration);
      plan.find('.right-price-form').slideDown(slideDuration);
    });

    plan.find('.btn-wont-pay').click(function() {
      plan.find('input[name="plan-acceptance"]').val('wontPay');
      plan.find('.why-no-form').slideUp(slideDuration);
      postTestFormAndThanks(plan);
    });

    plan.find('.btn-other-reason').click(function() {
      plan.find('input[name="plan-acceptance"]').val('otherReason');
      plan.find('.why-no-form').slideUp(slideDuration);
      plan.find('.other-reason-form').slideDown(slideDuration);
    });
  });

});

function postTestFormAndThanks(plan) {
  var fieldNames = [
    'other-features',
    'right-price',
    'other-reasons',
    'plan-acceptance',
    'proposed-price',
    'offered-features'];
  var content = 'nature=Plan';
  fieldNames.forEach(function(elt) {
    content += '&' + elt + '=' + plan.find('*[name="' + elt + '"]').val();
  });

  $.ajax({
    url: '/feedback/post_feedback.php?' + content
  }).done(function() {
    plan.find('.thank-you-form').slideDown(slideDuration);
  });
}
