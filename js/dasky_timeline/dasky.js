
(function($){
    $.Dasky = function(el, options){
        var base = this;
        base.$el = $(el);
        base.$el.data("dasky", base);
        
		//init 
        base._init = function(options){
			var body = document.body;
    
			var $testsupport = $('<div class="notsupported" style="display:none;"></div>').appendTo($('body'));
			$testsupport.jmpress({notSupportedClass:'notsupported'});
			var supported = true;
			if($testsupport.hasClass('notsupported'))
			{
				supported= false;
			}
			$testsupport.jmpress('deinit');
			$testsupport.remove();
			function isIE () {
				  var myNav = navigator.userAgent.toLowerCase();
				  return (myNav.indexOf('msie') != -1) ? parseInt(myNav.split('msie')[1]) : false;
			}
			var ltIE9  = false;
			if(isIE() && isIE()<9)
			{
				ltIE9 =true;
			}


			if(supported && !ltIE9)
			{
				base.$el.addClass('dsk-supported');
				//check for jmpress
				if(!$.jmpress)
				{
					alert('The page do not include jmpress js file,Dasky will not work!');
					return;
				}
				
				//extend options
				base.options = $.extend( true, {}, $.Dasky.defaults, options );
				
				//the slides member
				base.$steps= base.$el.children('div');
				
				//build the layout
				base._layout();
				
				//init jmpress
				base._initJmpress();
				
				base._loadEvents();
				
				if(base.options.autoplay){
					base._startSlider();
				}
			}else{
				base.$el.addClass('dsk-not-supported');
			}
			
        };
		
		//layout
		base._layout = function(){
			base.$slideWrapper = base.$steps.wrapAll('<div class="dsk-wrapper"></div>').parent();
			base.$slideWrapper.wrap('<div class="dsk-linewrapper"></div>');
			
			//nav
			if(base.options.nav)
			{
				base.$nav = $('<div class="dsk-nav"></div>');
				base.$pre = $('<span class="dsk-pre"></span>').appendTo(base.$nav);
				base.$next = $('<span class="dsk-next"></span>').appendTo(base.$nav);
				base.$pause = $('<span class="dsk-autoplay"></span>').appendTo(base.$nav);
				
				base.$el.append(base.$nav);
			}
			
			if(base.options.fullscreen)
			{
				$('html,body').css({height:'100%'});
				base.$el.css({height:'100%'});
			}
		};
		
		//init jmpress
		base._initJmpress = function(){
			//regist templete
			$.jmpress("template", "daskytpl", {
				children: function( idx, $currentstep, $children ) {
					var isTitleNode = $currentstep.has('.dsk-titlenode').size()>0;
					return {
						y: 0,
						x: isTitleNode?(idx-0.5)* 200 : idx * 200,
						scale: isTitleNode>0?1:1
					}
				}
			});
			
			base.$slideWrapper.attr('data-template','daskytpl').jmpress({
				viewPort 		: {
					height	: 550,
					width	: 1000,
					maxScale: 1
				},
				fullscreen: base.options.fullscreen,
				keyboard:{use:base.options.keyboard}
			});
		};
		
		//start auto play timer
		base._startSliderTimer = function(){
			base.slideTimer = setTimeout(function(){
				base.$slideWrapper.jmpress('next');
				if(base.options.autoplay)
					base._startSliderTimer();
			},base.options.interval);
		};
		
		base._startSlider = function(){
			base.options.autoplay = true;
			base._startSliderTimer();
			if(base.options.nav)
				base.$pause.addClass('playing');
			
		};
		
		//stop auto paly
		base._stopSlider = function(){
			if(base.options.autoplay){
				clearTimeout(base.slideTimer);
				base.options.autoplay = false;
				if(base.options.nav)
					base.$pause.removeClass('playing');
			}
		};
		
		//events
		base._loadEvents = function(){
			if(base.options.nav)
			{
				//prev
				base.$pre.on('click.dasky',function(){
					base._stopSlider();
					base.$slideWrapper.jmpress('prev');
				});
				
				//next
				base.$next.on('click.dasky',function(){
					base._stopSlider();
					base.$slideWrapper.jmpress('next');
				});
				
				//pause
				base.$pause.on('click.dasky',function(){
					if(base.options.autoplay)
					{
						base._stopSlider();
					}
					else
					{
						base._startSlider();
					}
				});
				
				//step click to pause auto play
				base.$slideWrapper.on('click.dasky',function(){
					base._stopSlider();
				});
				
			}
			//mousewheel
			var mousewheelfn = function(e, delta, deltaX, deltaY){
				base._stopSlider();
				if(delta<0)
				{
					base.$slideWrapper.jmpress('next');
				}
				else{
					base.$slideWrapper.jmpress('prev');
				}
				e.preventDefault();
			};
			if(base.options.mousewheel)
			{
			  base.$slideWrapper.on('mousewheel.dasky',mousewheelfn);
			  base.$el.on('mousewheel.dasky',mousewheelfn);
			}
		};
		
        base._init(options);
    };
    
	
	
    $.Dasky.defaults = {
		autoplay:true,
		nav:true,
		interval:4000,
		mousewheel:true,
		keyboard:true,
		fullscreen: true
    };
    
    $.fn.Dasky = function( options){
        return this.each(function(){
            (new $.Dasky(this,options));
        });
    };
    
})(jQuery);

/*! Copyright (c) 2011 Brandon Aaron (http://brandonaaron.net)
 * Licensed under the MIT License (LICENSE.txt).
 *
 * Thanks to: http://adomas.org/javascript-mouse-wheel/ for some pointers.
 * Thanks to: Mathias Bank(http://www.mathias-bank.de) for a scope bug fix.
 * Thanks to: Seamus Leahy for adding deltaX and deltaY
 *
 * Version: 3.0.6
 * 
 * Requires: 1.2.2+
 */

(function($) {

var types = ['DOMMouseScroll', 'mousewheel'];

if ($.event.fixHooks) {
    for ( var i=types.length; i; ) {
        $.event.fixHooks[ types[--i] ] = $.event.mouseHooks;
    }
}

$.event.special.mousewheel = {
    setup: function() {
        if ( this.addEventListener ) {
            for ( var i=types.length; i; ) {
                this.addEventListener( types[--i], handler, false );
            }
        } else {
            this.onmousewheel = handler;
        }
    },
    
    teardown: function() {
        if ( this.removeEventListener ) {
            for ( var i=types.length; i; ) {
                this.removeEventListener( types[--i], handler, false );
            }
        } else {
            this.onmousewheel = null;
        }
    }
};

$.fn.extend({
    mousewheel: function(fn) {
        return fn ? this.bind("mousewheel", fn) : this.trigger("mousewheel");
    },
    
    unmousewheel: function(fn) {
        return this.unbind("mousewheel", fn);
    }
});


function handler(event) {
    var orgEvent = event || window.event, args = [].slice.call( arguments, 1 ), delta = 0, returnValue = true, deltaX = 0, deltaY = 0;
    event = $.event.fix(orgEvent);
    event.type = "mousewheel";
    
    // Old school scrollwheel delta
    if ( orgEvent.wheelDelta ) { delta = orgEvent.wheelDelta/120; }
    if ( orgEvent.detail     ) { delta = -orgEvent.detail/3; }
    
    // New school multidimensional scroll (touchpads) deltas
    deltaY = delta;
    
    // Gecko
    if ( orgEvent.axis !== undefined && orgEvent.axis === orgEvent.HORIZONTAL_AXIS ) {
        deltaY = 0;
        deltaX = -1*delta;
    }
    
    // Webkit
    if ( orgEvent.wheelDeltaY !== undefined ) { deltaY = orgEvent.wheelDeltaY/120; }
    if ( orgEvent.wheelDeltaX !== undefined ) { deltaX = -1*orgEvent.wheelDeltaX/120; }
    
    // Add event and delta to the front of the arguments
    args.unshift(event, delta, deltaX, deltaY);
    
    return ($.event.dispatch || $.event.handle).apply(this, args);
}
})(jQuery);
