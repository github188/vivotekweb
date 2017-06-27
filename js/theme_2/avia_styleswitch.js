/**
 * Cookie plugin
 *
 * Copyright (c) 2006 Klaus Hartl (stilbuero.de)
 * Dual licensed under the MIT and GPL licenses:
 * http://www.opensource.org/licenses/mit-license.php
 * http://www.gnu.org/licenses/gpl.html
 *
 */

/**
 * Create a cookie with the given name and value and other optional parameters.
 *
 * @example $.cookie('the_cookie', 'the_value');
 * @desc Set the value of a cookie.
 * @example $.cookie('the_cookie', 'the_value', { expires: 7, path: '/', domain: 'jquery.com', secure: true });
 * @desc Create a cookie with all available options.
 * @example $.cookie('the_cookie', 'the_value');
 * @desc Create a session cookie.
 * @example $.cookie('the_cookie', null);
 * @desc Delete a cookie by passing null as value. Keep in mind that you have to use the same path and domain
 *       used when the cookie was set.
 *
 * @param String name The name of the cookie.
 * @param String value The value of the cookie.
 * @param Object options An object literal containing key/value pairs to provide optional cookie attributes.
 * @option Number|Date expires Either an integer specifying the expiration date from now on in days or a Date object.
 *                             If a negative value is specified (e.g. a date in the past), the cookie will be deleted.
 *                             If set to null or omitted, the cookie will be a session cookie and will not be retained
 *                             when the the browser exits.
 * @option String path The value of the path atribute of the cookie (default: path of page that created the cookie).
 * @option String domain The value of the domain attribute of the cookie (default: domain of page that created the cookie).
 * @option Boolean secure If true, the secure attribute of the cookie will be set and the cookie transmission will
 *                        require a secure protocol (like HTTPS).
 * @type undefined
 *
 * @name $.cookie
 * @cat Plugins/Cookie
 * @author Klaus Hartl/klaus.hartl@stilbuero.de
 */

/**
 * Get the value of a cookie with the given name.
 *
 * @example $.cookie('the_cookie');
 * @desc Get the value of a cookie.
 *
 * @param String name The name of the cookie.
 * @return The value of the cookie.
 * @type String
 *
 * @name $.cookie
 * @cat Plugins/Cookie
 * @author Klaus Hartl/klaus.hartl@stilbuero.de
 */
jQuery.cookie = function(name, value, options) {
    if (typeof value != 'undefined') { // name and value given, set cookie
        options = options || {};
        if (value === null) {
            value = '';
            options.expires = -1;
        }
        var expires = '';
        if (options.expires && (typeof options.expires == 'number' || options.expires.toUTCString)) {
            var date;
            if (typeof options.expires == 'number') {
                date = new Date();
                date.setTime(date.getTime() + (options.expires * 24 * 60 * 60 * 1000));
            } else {
                date = options.expires;
            }
            expires = '; expires=' + date.toUTCString(); // use expires attribute, max-age is not supported by IE
        }
        // CAUTION: Needed to parenthesize options.path and options.domain
        // in the following expressions, otherwise they evaluate to undefined
        // in the packed version for some reason...
        var path = options.path ? '; path=' + (options.path) : '';
        var domain = options.domain ? '; domain=' + (options.domain) : '';
        var secure = options.secure ? '; secure' : '';
        document.cookie = [name, '=', encodeURIComponent(value), expires, path, domain, secure].join('');
    } else { // only name given, get cookie
        var cookieValue = null;
        if (document.cookie && document.cookie != '') {
            var cookies = document.cookie.split(';');
            for (var i = 0; i < cookies.length; i++) {
                var cookie = jQuery.trim(cookies[i]);
                // Does this cookie string begin with the name we want?
                if (cookie.substring(0, name.length + 1) == (name + '=')) {
                    cookieValue = decodeURIComponent(cookie.substring(name.length + 1));
                    break;
                }
            }
        }
        return cookieValue;
    }
};


jQuery.noConflict();

jQuery(document).ready(function(){


	//links that I wont be able to filter are modified via js. for example the event links script
	var all_links = jQuery('a[href*="?skin"]');
	all_links.live('mouseenter mousedown', function()
	{
		avia_events_modify_attribute(this, 'href');
	});
	
	var all_forms = jQuery('form[action*="?skin"]');
	all_forms.live('mouseenter', function()
	{
		avia_events_modify_attribute(this, 'action');
	});	
	
	
	


	function avia_events_modify_attribute(the_link, attr_to_change)
	{
		var the_href  = the_link[attr_to_change],
			new_link = avia_events_modify_url(the_href);
		
		if(new_link)
		{
			the_link[attr_to_change] = new_link;
		}
	}
	
	function avia_events_modify_url(the_href)
	{
		var the_check = false, add_sufx  = "";
	
		if(the_check = the_href.match(/\?skin=(.+?)\//))
		{
			add_sufx = the_check[0].replace( /([A-Z])/g, " $1" );
			add_sufx = add_sufx.replace( /=\s/g, "=" );
			add_sufx = add_sufx.replace( /\s\s/g, " " );
			add_sufx = encodeURI(add_sufx.replace( /\//g, "" ));
			
			return the_href.replace(/\?skin=(.+?)\//, "/") + add_sufx;
		}
		
		return false;
	}
	
	
	
	// datepicker
	if(typeof jQuery.pjax == "function")
	{
		jQuery(".tribe-events-events-dropdown").die('change').live('change', function() {
			baseUrl = jQuery(this).parent().attr("action");
			
			url = avia_events_modify_url(decodeURI( baseUrl )+ "/" + jQuery('#tribe-events-events-year').val() + '-' + jQuery('#tribe-events-events-month').val());
	
	      jQuery('.ajax-loading').show(); 
			jQuery.pjax({ url: url, container: '#tribe-events-content', fragment: '#tribe-events-content', timeout: 1000 });
		});
	}






	var link_controller_links = jQuery('.link_controller_list a').not('.no_ajax a');
	
	link_controller_links.click(function()
	{
		var link 	= this,
			dynamic = jQuery('#dynamic-styles'),
			loader  = jQuery('.avia_styleswitcher .avia_loader');
		
		if(dynamic.length && !link.href.match(/bg_image_repeat=fullscreen/))
		{
			jQuery.ajax({
			  url: link.href,
			  dataType:'html',
			  beforeSend: function()
			  {
			  	loader.css({visibility:'visible'});
			  },
			  success: function(result)
			  {
			  	var newdynamic = jQuery(result).filter('#dynamic-styles'),
			  		bgcontainer = jQuery('.bg_container, .bg_fullscreen_ie_rule');
			  		
			  	if(newdynamic.length)
			  	{
			  		if(bgcontainer.length) bgcontainer.remove();
			  		
			  		link_controller_links.removeClass('avia_link_controller_active');
			  		jQuery(link).addClass('avia_link_controller_active');
			  		newdynamic.insertAfter(dynamic);
			  		dynamic.remove();
			  		loader.css({visibility:'hidden'});
			  	}
			  }
			});
			
			
			
			return false;
		}
		
		
	});
	
	var target = jQuery('.avia_styleswitcher');
	if(jQuery.cookie('avia_display_switch') == 'display_switch_false')
	{
		target.removeClass('display_switch').addClass('display_switch_false');
	}
	else if(jQuery.cookie('avia_display_switch') == 'display_switch')
	{
		target.removeClass('display_switch_false').addClass('display_switch');
	}
	
	

	jQuery('.avia_styleswitcher .openclose').click(function()
	{
		var target = jQuery(this).parent('.avia_styleswitcher');
		var animator = {left: "-327"};
		var animator2 = {left: "-75"};
		
		if(target.is('.display_switch'))
		{
			if(target.is('.switcher_right')) 
			{
				animator = {right: "-327"};
				animator2 = {right: "-75"};
			}
			target.animate(animator, function()
			{
				target.removeClass('display_switch').addClass('display_switch_false');
			});
			
			
			jQuery.cookie('avia_display_switch', 'display_switch_false', { expires: 7, path: '/' });
		}
		else
		{
			if(target.is('.switcher_right')) 
			{
				animator = {right: "-327"};
				animator2 = {right: "-75"};
			}
		
			target.animate(animator2, function()
			{
				target.removeClass('display_switch_false').addClass('display_switch');
			});
			jQuery.cookie('avia_display_switch', 'display_switch', { expires: 7, path: '/' });
		}
	});
	
	
	if( typeof jQuery.cookie('avia_display_switch') != "string")
	{
		setTimeout(function(){jQuery('.avia_styleswitcher .openclose').trigger('click');}, 1000);
	}
	

	
});

