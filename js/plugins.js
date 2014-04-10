// Avoid `console` errors in browsers that lack a console.
(function() {
    var method;
    var noop = function () {};
    var methods = [
        'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
        'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
        'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
        'timeStamp', 'trace', 'warn'
    ];
    var length = methods.length;
    var console = (window.console = window.console || {});

    while (length--) {
        method = methods[length];

        // Only stub undefined methods.
        if (!console[method]) {
            console[method] = noop;
        }
    }
}());

// Place any jQuery/helper plugins in here.
/**
 * Quick and dirty stick plugin
 * 
 * @author Lars Vierbergen
 */
(function() {

	/*
	 * Initialization, and re-initialisation on window resize
	 */
	function initialize($affixed, $bounding_box, offsetTop) {
		setStyles($affixed, {});
		$affixed.data('sticky', {
			'top' : $affixed.offset().top,
			'left' : $affixed.offset().left,
			'height' : $affixed.height(),
			'width' : $affixed.width(),
			'offsetTop' : offsetTop,
			'scrollBottom' : $bounding_box.offset().top
					+ $bounding_box.height() - offsetTop,
		});
		calculate($affixed);
	}

	/*
	 * Calculations based on window scroll position
	 */
	function calculate($affixed) {
		var windowTop = $(window).scrollTop();
		var stickyData = $affixed.data('sticky');
		if ((stickyData.top - stickyData.offsetTop) > windowTop) {
			setStyles($affixed, {
				position : 'static',
			});
		} else if ((stickyData.scrollBottom - stickyData.height) < windowTop) {
			setStyles($affixed, {
				position : 'relative',
				top : (stickyData.scrollBottom - stickyData.height
						- stickyData.top + stickyData.offsetTop),
			});
		} else {
			setStyles($affixed, {
				position : 'fixed',
				top : stickyData.offsetTop,
				left : stickyData.left,
				width : stickyData.width,
			});
		}
	}

	/*
	 * Helper to only set the new styles on the element
	 */
	function setStyles($elem, styles) {
		$elem.removeAttr('style');
		$elem.css(styles);
	}

	/*
	 * Main routine
	 */
	function stick($affixed, $bounding_box, offsetTop) {

		initialize($affixed, $bounding_box, offsetTop);

		$(window).on('scroll', function() {
			calculate($affixed);
		}).on('resize', function() {
			initialize($affixed, $bounding_box, offsetTop);
		});
	}

	$.fn.sticky = function(opts) {
		return this.each(function() {
			stick($(this), opts.boundary, opts.top);
		});
	}
})();
