(function() {
    "use strict";
    document.addEventListener('DOMContentLoaded', function() {

    }); //DomContentLoaded
})(); //use strict
var bandera = 0;
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

    //menu movil
    $('div.toggle-btn').on('click', menuMovil);

    function menuMovil() {
        if (bandera == 0) {
            $('.sidebar').css({ 'height': '100%' });
            $('h1').css({ 'opacity': '.1' });
            $('.sidebar ul').css({ 'display': 'block' });
            $('.toggle-btn span').css({ 'background-color': '#fafafa' });
            bandera = 1;
        } else {
            $('.sidebar').css({ 'height': '0px' });
            $('h1').css({ 'opacity': '.5' });
            $('.sidebar ul').css({ 'display': 'none' });
            $('.toggle-btn span').css({ 'background-color': 'rgba(0, 0, 0, 0.5)' });
            bandera = 0;
        }
    }


});