/*jslint browser: true*/
/*global $, WOW, jQuery, alert*/

$(document).ready(function () {
    "use strict";
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.scroll-top').fadeIn();
        } else {
            $('.scroll-top').fadeOut();
        }
    });
    $('.scroll-top').click(function () {
        $("html, body").animate({
            scrollTop: 0
        }, 600);
        return false;
    });
            /*fancybok*/
    $(".fancybox").fancybox({
        openEffect : 'elastic',
        closeEffect : 'elastic'
    });
    var navOffset = jQuery("nav").offset().top;
    jQuery(window).scroll(function () {
        var scrollPos = jQuery(window).scrollTop();
        if (scrollPos > navOffset) {
            jQuery("nav").addClass("fixed");
            $(".web-logo").css("position", "relative");
            $(".web-logo").css("opacity", "0.5");
            $(".web-logo").css("transition", "0.5");
        } else {
            jQuery("nav").removeClass("fixed");
            $(".web-logo").css("transition", "1.5");
            $(".web-logo").css("opacity", "1");
        }
    });
    
    new WOW().init();
    
    $(window).load(function () {
        $("body").fadeIn(1000);
        $(".ybile").fadeOut(7000, function () {
            $(this).parent().fadeOut(3000);
        });
        $(".spinner").fadeOut(6000, function () {
            $(this).parent().fadeOut(3000);
        });
    });
});