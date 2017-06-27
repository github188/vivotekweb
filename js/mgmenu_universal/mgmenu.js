/*
Item Name : Universal Mega Menu
Item URI : http://codecanyon.net/item/universal-responsive-mega-menu/4984236
Author URI : http://codecanyon.net/user/Pixelworkshop/
Version : 1.1
*/


(function($) {
    

    $.universalMegaMenu = function(element, options) {


        var settings = {
            menu_effect: 'hover_fade',
            menu_speed_show: 300,
            menu_speed_hide: 200,
            menu_speed_delay: 200,
            menu_click_outside: true,
            menubar_trigger : true,
            menubar_hide : false,
            menu_responsive: true
        };
        
        var plugin = this;
        
        plugin.options = {}

        var $element = $(element);
        var element = element;

        var megaMenu = $element.children('.mgmenu'),
            menuItem = $(megaMenu).children('li'),
            menuItemSpan = $(menuItem).children('span'),
            menuDropDown = $(menuItem).find('.dropdown_container, .dropdown_fullwidth'),
            menuItemFlyOut = $(menuItem).find('.dropdown_parent'),
            menuItemFlyOutLink = $(menuItemFlyOut).children('a'),
            menuItemFlyOutDropDown = $(menuItemFlyOut).find('.dropdown_flyout_level'),
            menuButton = $element.find('.mgmenu_button'),
            menuItemElement = $(menuItem).add(menuItemFlyOut),
            menuItemLink = $(menuItemSpan).add(menuItemFlyOutLink),
            menuDropDownElement = $(menuDropDown).add(menuItemFlyOutDropDown);


        plugin.init = function() {

            settings = $.extend(1, settings, options);

            hoverIntentConfig = {
                sensitivity: 2, // number = sensitivity threshold (must be 1 or higher)
                interval: settings.menu_speed_delay, // number = milliseconds for onMouseOver polling interval
                over: megaMenuOver, // function = onMouseOver callback (REQUIRED)
                timeout: 200, // number = milliseconds delay before onMouseOut
                out: megaMenuOut // function = onMouseOut callback (REQUIRED)
            };

            megaMenuPosition();
            megaMenuEvents();
            megaMenuTabs();

            if (settings.menu_click_outside === true) {
                megaMenuClickOut();
            }
            if (settings.menubar_trigger === true) {
                megamenuBarHide = settings.menubar_hide;
                megaMenuTrigger($element);
            }

        }


        var megaMenuPosition = function(){

            if (("ontouchstart" in document.documentElement) && (settings.menu_responsive === true)) {

                if ($(window).width() < 768) {
                    $(menuDropDownElement).hide();
                } else {
                    megaMenuToggleElements();
                }

                $(menuItemElement).toggleClass('noactive');

                $(window).bind('orientationchange', function () {
                    megaMenuToggleElements();
                });

            } else {

                megaMenuToggleElements();

                $(window).resize(function() {
                    megaMenuToggleElements();
                    if(!$element.is(':visible') && $(window).width() < 768) {
                        $element.show(0);
                    }
                });

            }

            $(menuButton).click(function () {
                $(menuButton).toggleClass('mgmenu_button_active');
                $(menuItem).not(":eq(0)").toggle(0);
            });

        }
        

        var megaMenuToggleElements = function(){

            $(menuDropDownElement).css({'display': 'block'}).hide(0);

        }


        var megaMenuClickOut = function(){

            var ua = navigator.userAgent,
                event = (ua.match(/iPad/i)) ? "touchstart" : "click";

            $(document).on(event, function(e) {
                $(menuItemElement).removeClass('active');
                $(menuDropDownElement).hide(0);
            });
            $(element).on(event, function(e){
                e.stopPropagation();
            });  

        }


        var megaMenuTrigger = function($bar){

            $bar.after('<a class="mgmenu_trigger" href="#"></a>');

            var $this = $bar.next('a');
            
            if (megamenuBarHide === true && $(window).width() >= 768) {
                $bar.hide(0);
                $('.mgmenu_trigger').toggleClass("active");
            }
            
            $this.click(function() {
                $(this).prev($bar).slideToggle(300);
                $(this).toggleClass("active");
                return false;
            });

        }
        

        var megaMenuEvents = function(){
 
            if (("ontouchstart" in document.documentElement) && (settings.menu_responsive === true)) {

                $(menuItemElement).unbind('mouseenter mouseleave').click(function () {

                    var $this = $(this);
                    $this.siblings().removeClass('active').addClass('noactive')
                        .find(menuDropDownElement).hide(0);   
                    $this.toggleClass('active noactive')
                        .find(menuDropDownElement).first().toggle(0)
                        .click(function (event) {
                            event.stopPropagation();
                        });
                });

                $(document).click(function () {
                    $(menuItemElement).addClass('noactive');
                    $(menuDropDownElement).hide(0);
                });
                $element.click(function (event) {
                    event.stopPropagation();
                });
                $(window).bind('orientationchange', function () {
                    $(menuItemElement).addClass('noactive');
                    $(menuDropDownElement).hide(0);
                });

                return;

            } else {

                switch (settings.menu_effect) {

                    case 'open_close_fade':
                    var menuEffectShow = 'fadeToggle',
                        menuEffectHide = 'fadeOut';
                        break;
                    case 'open_close_slide':
                    var menuEffectShow = 'slideToggle',
                        menuEffectHide = 'slideUp';
                        break;

                }
                
                switch (settings.menu_effect) {

                    case 'hover_fade':
                    case 'hover_slide':
                    case 'click_fade':
                    case 'click_slide':
                        $(menuItem).hoverIntent(hoverIntentConfig);
                        $(menuItemFlyOut).hoverIntent(hoverIntentConfig);
                        break;

                    case 'open_close_fade':
                    case 'open_close_slide':

                        $(menuItemElement).unbind('mouseenter mouseleave').click(function () {

                            var $this = $(this);
                            $this.siblings().removeClass('active')
                                .find(menuDropDownElement)[menuEffectHide](settings.menu_speed_hide);   
                            $this.toggleClass('active')
                                .find(menuDropDownElement).first()
                                .delay(settings.menu_speed_delay)[menuEffectShow](settings.menu_speed_show)
                                .click(function (event) {
                                    event.stopPropagation();
                                });

                        });

                        break;

                }

            }
            
        }


        var megaMenuTabs = function(){

            $('.mgmenu_tabs').each(function(index, value) { 
                    
                var menuTabs = $(this);
                    menuTabsNav = menuTabs.find(".mgmenu_tabs_nav > li > a");

                menuTabsNav.click(function() {
                
                    var menuTabsLinkCurrent = menuTabs.find("a.current").attr("href").substring(1),
                        $menuTabsLink = $(this),
                        menuTabsLinkID = $menuTabsLink.attr("href").substring(1);

                    if ((menuTabsLinkID != menuTabsLinkCurrent) && ( menuTabs.find(":animated").length == 0)) {
                                            
                        menuTabs.find(".mgmenu_tabs_nav li a").removeClass("current");
                        $menuTabsLink.addClass("current");

                        menuTabs.find("#"+menuTabsLinkCurrent).fadeOut(300, function() {

                            menuTabs.find("#"+menuTabsLinkID).fadeIn(300);
                            var newHeight = menuTabs.find("#"+menuTabsLinkID).height();

                        });

                    }   
                    
                    return false;
                    
                });

            }); 

        }
        

        function megaMenuOver() {

            var $this = $(this);

            switch (settings.menu_effect) {

                case 'hover_fade':
                    $this.children(menuDropDownElement).fadeIn(settings.menu_speed_show);
                    break;
                case 'hover_slide':
                    $this.children(menuDropDownElement).slideDown(settings.menu_speed_show);
                    break;
                case 'click_fade':
                    $this.click(function () {
                        $this.children(menuDropDownElement).fadeIn(settings.menu_speed_show);
                    });
                    break;
                case 'click_slide':
                    $this.click(function () {
                        $this.children(menuDropDownElement).slideDown(settings.menu_speed_show);
                    });
                    break;

            }

        }


        function megaMenuOut() {

            var $this = $(this);
        
            switch (settings.menu_effect) {
                case 'hover_fade':
                case 'click_fade':
                    $this.find(menuDropDownElement).fadeOut(settings.menu_speed_hide);
                    break;
                case 'hover_slide':
                case 'click_slide':
                    $this.find(menuDropDownElement).slideUp(settings.menu_speed_hide);
                    break;

            }

        }            
        
       
        plugin.init();

    }


    $.fn.universalMegaMenu = function(options) {


        return this.each(function() {

            if (undefined == $(this).data('megaMenu')) {

                var plugin = new $.universalMegaMenu(this, options);
                $(this).data('megaMenu', plugin);

            }

        });


    }


})(jQuery);