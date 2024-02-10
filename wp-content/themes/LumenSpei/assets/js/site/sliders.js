"use strict";

require('slick-carousel');

// let	_this;

let _this = module.exports = {

	
	/*-------------------------------------------------------------------------------
		# Cache dom and strings
	-------------------------------------------------------------------------------*/
	$dom: {
		testimonialsTopSlider: $('.js-testimonials-slider-top'),
		testimonialsBottomSlider: $('.js-testimonials-slider-bottom'),
    },

    vars: {
	},

	/*-------------------------------------------------------------------------------
		# Initialize
	-------------------------------------------------------------------------------*/
	init: function () {
		if( _this ){
			_this.$dom.testimonialsTopSlider.slick({
                slidesToScroll: 1,
                slidesToShow: 1,
                arrows: false,
                infinite: true,
                draggable: false,
                rows: 0,
                fade: true,
                swipe: false,
            });

            _this.$dom.testimonialsBottomSlider.slick({
                slidesToScroll: 1,
                slidesToShow: 1,
                arrows: true,
                infinite: true,
                draggable: false,
                variableWidth: true,
                asNavFor: _this.$dom.testimonialsTopSlider,
                centerMode: true,
                focusOnSelect: true,
                rows: 0,
                prevArrow: "<span class='slick-prev pull-left'><i class='icon icon-arrow-left' aria-hidden='true'></i></span>",
			          nextArrow: "<span class='slick-next pull-right'><i class='icon icon-arrow-right' aria-hidden='true'></i></span>",
          });
		}
    },

};