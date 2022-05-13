(function($) {
	'use strict';

	$(document).ready(function() {
		bmiCalculator.init();
        bmiCalcSelect2();
	});

	var bmiCalculator = {};
	bmiCalculator.mkdfOnWindowLoad = mkdfOnWindowLoad;

	$(window).on('load', mkdfOnWindowLoad);

	/*
     All functions to be called on $(window).on('load') should be in this function
     */
	function mkdfOnWindowLoad() {
		mkdfElementorBmiCalculator();
	}

	/**
	 * Elementor
	 */
	function mkdfElementorBmiCalculator(){
		$(window).on('elementor/frontend/init', function () {
			elementorFrontend.hooks.addAction( 'frontend/element_ready/powerlift_bmi_calculator.default', function() {
				bmiCalculator.init();
				bmiCalcSelect2();
			} );
		});
	}

	var bmiCalculator = function() {
		var form = $('.mkdf-bmic-form'),
			bmiCalcHolder = $('.mkdf-bmi-calculator-holder'),
			data = {},
			notificationHolder = bmiCalcHolder.find('.mkdf-bmic-notifications'),
			notificationTextHolder = notificationHolder.find('.mkdf-bmic-notification-text'),
			iconHolder = notificationHolder.find('.mkdf-bmic-icon-holder');

		var handleForm = function() {
			if(form.length && typeof form !== 'undefined') {

                form.submit(function(e) {
					e.preventDefault();

					data.formData = form.serialize();
					data.action = 'mkdf_bmi_calculate';

					notificationHolder.hide();
					notificationTextHolder.html('');
					notificationHolder.removeClass('mkdf-bmic-notification-error');
					iconHolder.find('span').removeClass();

					$.ajax({
						data: data,
						dataType: 'json',
						type: 'POST',
						url: mkdfBmiCalculatorAjaxUrl,
						success: function(response) {

							if(response.hasError) {
								notificationHolder.addClass('mkdf-bmic-notification-error');
							} else {
								iconHolder.find('span').addClass('mkdf-bmic-' + response.BMIRank);
								clearForm();
							}

							notificationHolder.show();
							notificationTextHolder.html(response.notificationText);
						}
					});
				});
			}
		};

		var clearForm = function() {
			form.find('input[type="text"], select, textarea').val('');
		};

		var handleCloseIcon = function() {
			var closeIcon = notificationHolder.find('.mkdf-bmic-notification-close');

			if(closeIcon.length) {
				closeIcon.on('click', function(e) {
					e.preventDefault();
					e.stopPropagation();

					notificationHolder.fadeOut();
				});
			}
		}

		return {
			init: function() {
				handleForm();
				handleCloseIcon();
			}
		}
	}();

    function bmiCalcSelect2() {
        var BMICalcHolder = $('.mkdf-bmi-calculator-holder'),
            select;

        if(BMICalcHolder.length) {
            select = BMICalcHolder.find('select');

            if(select.length) {
                select.select2({
                    minimumResultsForSearch: Infinity
                });
            }
        }
    }
	
})(jQuery);