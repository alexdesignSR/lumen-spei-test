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
            function toggleMenu() {
                _this.$dom.menuToggle.toggleClass('active');
                $('body').toggleClass('overflow-hidden');
                _this.$dom.menuContainer.toggleClass('active');
            }
        
            _this.$dom.menuToggle.on('click', function() {
                if ($(window).innerWidth() <= 991) {
                    toggleMenu();
                }
            });
        
            $('.site-header-nav-menu a').on('click', function() {
                if ($(window).innerWidth() <= 991) {
                    _this.$dom.menuToggle.removeClass('active');
                    $('body').removeClass('overflow-hidden');
                    _this.$dom.menuContainer.removeClass('active');
                }
            });
        
            $(window).on('resize', function() {
                if ($(window).innerWidth() > 991) {
                    _this.$dom.menuToggle.removeClass('active');
                    $('body').removeClass('overflow-hidden');
                    _this.$dom.menuContainer.removeClass('active');
                }
            });
		}
    },

};