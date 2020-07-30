(function() {
    "use strict";
    document.addEventListener('DOMContentLoaded', function() {

    }); //DomContentLoaded
})(); //use strict
var bandera = 0;

window.addEventListener("load", function() {
    var ancho = screen.width;
    document.cookie = "var=" + ancho + ";";
    var bandera = 0;
});
$(function() {
    //barra de navegacion fija
    var windowsHeight = $(window).height();
    var barraHeight = $('div.barra-navegacion').innerHeight();
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        if (scroll > 0) {
            $('div.barra-navegacion').addClass('fixed');
            $('body').css({ 'margin-top': barraHeight + 'px' });
            //para la pagina contacto
            $('body.contactos main').css({ 'margin-top': (barraHeight + 32) + 'px' });
            //para productos
            $('body.productos div.contenido').css({ 'margin-top': (barraHeight + 48) + 'px' });
        } else {
            $('div.barra-navegacion').removeClass('fixed');
            $('body').css({ 'margin-top': 0 + 'px' });
            //para la pagina contacto
            $('body.contactos main').css({ 'margin-top': 32 + 'px' });
            $('body.productos div.contenido').css({ 'margin-top': (48) + 'px' });
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
            $('.toggle-btn span').css({ 'background-color': 'rgba(95, 91, 91, 0.5)' });
            bandera = 0;
        }
    }


    //enviar consulta con ajax
});
/******** function filtrar (Sirve para agregar automaticamente un combobox de acuerdo al sexo seleccionado) deshabilitado hasta que se venda ropa masculina*********************/

//variables para el select
// function filtrarDatos() {
//     // document.form_filtro.submit();
//     //creamos los datos que tendra el segundo combobox sexo
//     var ropaMujeres = new Array("Jeans", "Blusas", "Camisas", "Conjuntos");
//     var ropaHombres = new Array("Jeans", "Remeras", "Camisas", "Zapatos", "Campera", "Conjuntos");
//     var ropas = [ropaMujeres, ropaHombres];
//     //seleccionamos el indice que esta seleccionado en el select
//     var indiceSexo = document.form_filtro.sexo.selectedIndex;
//     if (indiceSexo == 0) {
//         //entonces esta seleccionado mujeres
//         //sacamos la cantidad de items
//         var numRopas = ropas[0].length;
//         //colocamos la cantidad total de option en el select
//         document.form_filtro.tipo.length = numRopas;
//         ropas = ropas[0];
//         for (let i = 0; i < numRopas; i++) {
//             document.form_filtro.tipo.options[i].value = ropas[i];
//             document.form_filtro.tipo.options[i].text = ropas[i];
//         }
//     } else {
//         //entonces esta seleccionado hombres
//         //sacamos la cantidad de items
//         var numRopas = ropas[1].length;
//         //colocamos la cantidad total de option en el select
//         document.form_filtro.tipo.length = numRopas;
//         ropas = ropas[1];
//         for (let i = 0; i < numRopas; i++) {
//             document.form_filtro.tipo.options[i].value = ropas[i];
//             document.form_filtro.tipo.options[i].text = ropas[i];
//         }
//     }
// }