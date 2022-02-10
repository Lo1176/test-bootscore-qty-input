jQuery(function ($) {
  
  // Single add to cart button
  $('.single_add_to_cart_button:not(.product_type_variable):not(.product_type_external):not(.product_type_grouped)').attr('data-bs-toggle', 'offcanvas').attr('data-bs-target', '#offcanvas-cart');
  // Single add to cart button END

  // Add loading class to offcanvas-cart
  $('body').bind('adding_to_cart', function () {
    $('#offcanvas-cart').addClass('loading');
  });

  $('body').bind('added_to_cart', function () {
    $('#offcanvas-cart').removeClass('loading');
  });
  // Add loading class to offcanvas-cart END

  // Review Checkbox Products
  $('.comment-form-cookies-consent').addClass('form-check');
  $('#wp-comment-cookies-consent').addClass('form-check-input');
  $('.comment-form-cookies-consent label').addClass('form-check-label');
  // Review Checkbox END

  // Checkout Form Validation
  $('body').on('blur change', '.form-row input', function () {
    $('.woocommerce form .form-row.woocommerce-validated .select2-container, .woocommerce form .form-row.woocommerce-validated input.input-text, .woocommerce form .form-row.woocommerce-validated select, .woocommerce form .form-row.woocommerce-validated .form-check-input[type=checkbox]').removeClass('is-invalid').addClass('is-valid');
    $('.woocommerce form .form-row.woocommerce-invalid .select2-container, .woocommerce form .form-row.woocommerce-invalid input.input-text, .woocommerce form .form-row.woocommerce-invalid select, .woocommerce form .form-row.woocommerce-invalid .form-check-input[type=checkbox]').removeClass('is-valid').addClass('is-invalid');
  });
  // Checkout Form Validation END
  
  // WC Quantity Input
  if (!String.prototype.getDecimals) {
    String.prototype.getDecimals = function () {
      var num = this,
        match = ('' + num).match(/(?:\.(\d+))?(?:[eE]([+-]?\d+))?$/);
      if (!match) {
        return 0;
      }
      return Math.max(0, (match[1] ? match[1].length : 0) - (match[2] ? +match[2] : 0));
    }
  }
  // Quantity "plus" and "minus" buttons
  $(document.body).on('click', '.plus, .minus', function () {
    var $qty = $(this).closest('.quantity').find('.qty'),
      currentVal = parseFloat($qty.val()),
      max = parseFloat($qty.attr('max')),
      min = parseFloat($qty.attr('min')),
      step = $qty.attr('step');

    // Format values
    if (!currentVal || currentVal === '' || currentVal === 'NaN') currentVal = 0;
    if (max === '' || max === 'NaN') max = '';
    if (min === '' || min === 'NaN') min = 0;
    if (step === 'any' || step === '' || step === undefined || parseFloat(step) === 'NaN') step = 1;

    // Change the value
    if ($(this).is('.plus')) {
      if (max && (currentVal >= max)) {
        $qty.val(max);
      } else {
        $qty.val((currentVal + parseFloat(step)).toFixed(step.getDecimals()));
      }
    } else {
      if (min && (currentVal <= min)) {
        $qty.val(min);
      } else if (currentVal > 0) {
        $qty.val((currentVal - parseFloat(step)).toFixed(step.getDecimals()));
      }
    }

    // Trigger change event
    $qty.trigger('change');
  });
  // WC Quantity Input End

}); // jQuery End