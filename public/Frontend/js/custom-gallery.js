/*==========

Template Name: FoodeCart - Restaurants & Food Template

==========*/

/*==========
----- JS INDEX -----
1.Whole Script Strict Mode Syntax
2.Gallery Page Tabbing JS
==========*/



$(document).ready(function($) {

	// Whole Script Strict Mode Syntax
	"use strict";

	// Gallery Page Tabbing JS Start
	var filterList = {

        init: function() {

            // MixItUp plugin
            // http://mixitup.io
            $('#gallerylist').mixItUp({
                selectors: {
                    target: '.gallery-box',
                    filter: '.filter'
                },
                load: {
                    filter: '.all, .gallery-breakfast, .gallery-lunch, .gallery-dinner, .gallery-dessert'
                }
            });

        }

    };

    // Run the show!
    filterList.init();
	// Gallery Page Tabbing JS End

});