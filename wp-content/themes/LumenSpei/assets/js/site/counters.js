"use strict";

// const Global = require('./global');

// let	_this;

let _this = module.exports = {

	
	/*-------------------------------------------------------------------------------
		# Cache dom and strings
	-------------------------------------------------------------------------------*/
	$dom: {
		body: $('body')
    },

    vars: {
	},

	/*-------------------------------------------------------------------------------
		# Initialize
	-------------------------------------------------------------------------------*/
	init: function () {
		if( _this ){
			$(window).on('load scroll', function() {
                $('.js-statistic-number').each(function() {
                    if (isElementInViewport($(this)) && !$(this).hasClass('active')) {
                        $(this).addClass('active');
                        startCounter($(this));
                    }
                });
            });
            
            function isElementInViewport($element) {
                var rect = $element[0].getBoundingClientRect();
                return (
                    rect.top >= 0 &&
                    rect.left >= 0 &&
                    rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                    rect.right <= (window.innerWidth || document.documentElement.clientWidth)
                );
            }
            
            function startCounter($element) {
                var endValue = parseInt($element.attr('data-count'));
                if (!isNaN(endValue)) {
                  var current = 0;
                  var step = Math.ceil(endValue / 100);
            
                  var counterInterval = setInterval(function() {
                    $element.text(current);
                    current += step;
                    if (current >= endValue) {
                        $element.text(endValue);
                        clearInterval(counterInterval);
                    }
                  }, 50);
                } else {
                    console.error("Invalid data-count attribute for counter:", $element.attr('id'));
                }
            }
		}
    },

};