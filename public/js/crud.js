$(document).ready(function () {

    'use strict';


    // ------------------------------------------------------- //
    // Card Close
    // ------------------------------------------------------ //
    $('.card-close a.remove').on('click', function (e) {
        e.preventDefault();
        $(this).parents('.card').fadeOut();
    });

    


    // ------------------------------------------------------- //
    // Sidebar Functionality
    // ------------------------------------------------------ //
    $('#toggle-btn').on('click', function (e) {
        e.preventDefault();
        $(this).toggleClass('active');

        $('.side-navbar').toggleClass('shrinked');
        $('.content-inner').toggleClass('active');
        $(document).trigger('sidebarChanged');

        if ($(window).outerWidth() > 1183) {
            if ($('#toggle-btn').hasClass('active')) {
                $('.navbar-header .brand-small').hide();
                $('.navbar-header .brand-big').show();
            } else {
                $('.navbar-header .brand-small').show();
                $('.navbar-header .brand-big').hide();
            }
        }

        if ($(window).outerWidth() < 1183) {
            $('.navbar-header .brand-small').show();
        }
    });
  
});

// // ------------------------------------------------------- //
//     // Ajax crear producto
//     // ------------------------------------------------------ //
//     function mostrarMensaje(mensaje){
//         $("#divmensaje").empty(); //limpiar 
//         $("#divmensaje").append("<p>"+mensaje+"</p>");
//         $("#divmensaje").show(500);
//         $("#divmensaje").hide(5000);
//     };   


//     $.ajaxSetup({
//         headers:{
//             'X-CSRF-TOKEN': $("meta[name='csrf-token]").attr('content'),
//         }
//     });

//     $(".btnenviar").click(function(e){
//         e.preventDefault();
//         var nombre = $('input[name=nombre]').val();
//         var descripcion = $('input[name=descripcion]').val();
//         var precio = $('input[name=precio]').val();
//         var stock = $('input[name=stock]').val();
//         var id_categoria = $('select[name=id_categoria]').val();
//         var imagen = $('input[name=imagen]').val();

//         $.ajax({
//             type: "POST",
//             url: "{{route('crearProducto')}}",
//             data: {
//                 nombre:nombre,
//                 descripcion:descripcion,
//                 precio:precio,
//                 stock:stock,
//                 id_categoria:id_categoria,
//                 imagen:imagen
//             },
//             success:function(data){
//                 mostrarMensaje(data.mensaje);
//                 limpiarCampos();
//             }
//         })

//     });