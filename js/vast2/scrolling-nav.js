//jQuery to collapse the navbar on scroll

var self = this;
$(function() {
    $(".nav li a").bind('click', function(event) {
        var $anchor = $(this);
        self.link = '#' + $(this).attr('id');
        if($(self.link).hasClass('active')) return;
        
        changeMenu(self.link);

        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
            }, 1000, 'easeInOutExpo',
            function () {
                self.link = "";
            });
            event.preventDefault();
        });
});

$(window).bind('scroll', function() {
    if(self.link != undefined && self.link.length != 0) return;
    if($(document).scrollTop() - $("#tutorial-link").offset().top < 0){
        changeMenu("#_vast2-link");
    }else if($(document).scrollTop() - $("#tutorial-link").offset().top < $("#tutorial-link").height()){
        changeMenu("#_tutorial-link");
    }else{
        changeMenu("#_contact-us");
    }

});

//jQuery for page scrolling feature - requires jQuery Easing plugin


var changeMenu = function(link){
    if($(link).hasClass('active')) return;
    $(".nav li a").each(function(){
        $(".nav li a").removeClass("active");
    });
    $(link).addClass("active");
}



var switchMenu = function(id){
    $(".nav li a").each(function(i){        
        var link = $(this).attr("href");

        $(this).removeClass("active");        

        if(link==id) $(this).addClass("active");        
    })
}