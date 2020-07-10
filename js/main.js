(function() {
    "use strict";
    document.addEventListener('DOMContentLoaded', function() {

    }); //DomContentLoaded
})(); //use strict
$(function() {
    //barra de navegacion fija
    var windowsHeight = $(window).height();
    var barraHeight = $('div.barra-navegacion').innerHeight();
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        if (scroll > 0) {
            $('div.barra-navegacion').addClass('fixed');
            $('body').css({ 'margin-top': barraHeight + 'px' });
        } else {
            $('div.barra-navegacion').removeClass('fixed');
            $('body').css({ 'margin-top': 0 + 'px' });
        }
        return false;
    });
});