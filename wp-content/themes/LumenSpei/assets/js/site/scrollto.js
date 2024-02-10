"use strict";

// const Global = require('./global');

// let	_this;

let _this = module.exports = {

	
	/*-------------------------------------------------------------------------------
		# Cache dom and strings
	-------------------------------------------------------------------------------*/
	$dom: {
		body: $('body'),
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
                    $('a[href^="#"]').on('click',function (e) {
                        e.preventDefault();
                    
                        var target = this.hash;
                        var $target = $(target);
                        
                        if ($target.length) {
                            $('html, body').stop().animate({
                                'scrollTop': $target.offset().top - 70
                            }, 900, 'swing', function () {
                                window.location.hash = target;
                            });
                        }
                    });
                } else {
                    $('a[href^="#"]').on('click',function (e) {
                        e.preventDefault();
                    
                        var target = this.hash;
                        var $target = $(target);
                        
                        if ($target.length) {
                            $('html, body').stop().animate({
                                'scrollTop': $target.offset().top
                            }, 900, 'swing', function () {
                                window.location.hash = target;
                            });
                        }
                    });
                }
            });
		}
    },

};