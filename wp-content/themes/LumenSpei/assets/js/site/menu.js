"use strict";

// const Global = require('./global');

// let	_this;

let _this = module.exports = {

	
	/*-------------------------------------------------------------------------------
		# Cache dom and strings
	-------------------------------------------------------------------------------*/
	$dom: {
		menuToggle: $('.menu-toggle'),
		menuContainer: $('.site-header-nav-menu'),
    },

    vars: {
	},

	/*-------------------------------------------------------------------------------
		# Initialize
	-------------------------------------------------------------------------------*/
	init: function () {
		if( _this ){
			$(window).on('load resize', function() {
                if($(window).width() <= 991) {
                    _this.$dom.menuToggle.on('click', function() {
                        $(this).toggleClass('active');
                        $('body').toggleClass('overflow-hidden');
                        _this.$dom.menuContainer.toggleClass('active');
                    });

					$('.site-header-nav-menu a').on('click', function() {
                        _this.$dom.menuToggle.removeClass('active');
                        $('body').removeClass('overflow-hidden');
                        _this.$dom.menuContainer.removeClass('active');
                    });
                }
            });
		}
    },

};