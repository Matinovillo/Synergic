
// ------------------------------------------------------- //
// Sidevar
// ------------------------------------------------------ //
$(document).ready(function () {
    'use strict';
    // Card Close
    $('.card-close a.remove').on('click', function (e) {
        e.preventDefault();
        $(this).parents('.card').fadeOut();
    });
    // Sidebar Functionality
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


// ------------------------------------------------------- //
// Crear producto Ajax
// ------------------------------------------------------ //

// function limpiarCampos() {
//     $("#inpNombre").val('');
//     $("#inpDesc").val('');
//     $("#inpPrecio").val('');
//     $("#inpStock").val('');
//     $("#inpCategoria").val('');
//     $("#inpImg").val('');
// }

// $("#producto-create-submit").click(function (e) {
//     e.preventDefault();
//     var nombre = $("#inpNombre").val();
//     var descripcion = $("#inpDesc").val();
//     var precio = $("#inpPrecio").val();
//     var stock = $("#inpStock").val();
//     var categoria = $("#inpCategoria").val();
//     var imagefile = document.querySelector('#inpImg');

//     var formData = new FormData();
//     formData.append("imagen", imagefile.files[0]);
//     formData.append("id_categoria", categoria);
//     formData.append("precio", precio);
//     formData.append("stock", stock);
//     formData.append("descripcion", descripcion);
//     formData.append("nombre", nombre);

//     $.ajax({
//         headers: {
//             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//         },
//         url: routeStore,
//         type: "POST",
//         data: formData,
//         processData: false,
//         contentType: false,
//         cache: false,
//         success: function (data) {
//             Swal.fire({
//                 title: 'Exito!',
//                 text: 'El producto se cargo correctamente.',
//                 icon: 'success',
//                 confirmButtonText: 'Continuar'
//             });
//             limpiarCampos();
//         },
//         error: function (data) {
//             Swal.fire({
//                 title: 'Error!',
//                 text: 'Hubo un error al cargar el producto.',
//                 icon: 'error',
//                 confirmButtonText: 'Continuar'
//             });
//         }

//     });
// });

// $("#producto-create-submit").click(function (e) {
//     e.preventDefault()
//     var imagefile = document.querySelector('#inpImg');
//     var campos = {
//         nombre: $("#inpNombre").val(),
//         descripcion: $("#inpDesc").val(), 
//         precio: $("#inpPrecio").val(),
//         stock: $("#inpStock").val(),
//         categoria: $("#inpCategoria").val(),
//         imagen: imagefile.files[0],
//     }
//     var data = new FormData()
//     data.append('data',JSON.stringify(campos))

//     console.log(data)

//     fetch(routeStore,{
//         method: 'POST',
//         body: data,
//         headers: {
//         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//         },
//     })
//     .then(function(response){
//         return response.text()
//     })
//     .then(function(data){
//         console.log(data)
//     })
//     .catch(function(error){
//         console.log(error)
//     })

// });


// ------------------------------------------------------- //
// Eliminar producto con redirect
// ------------------------------------------------------ //

$(".delete-producto").click(function (e) {
    e.preventDefault();
    Swal.fire({
        title: '¿Estas seguro?',
        text: "No podras restaurar el producto!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#0e8ce4',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Borrar',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.value) {
            var id = $(this).data("id");
            var token = $("meta[name='csrf-token']").attr("content");
            var url = e.target;
            $.ajax(
                {
                    url: "http://localhost:8000/admin/productos/" + id,
                    type: 'DELETE',
                    data: {
                        _token: token,
                        id: id
                    },
                    success: function (response) {
                        $("#success").html(response.message)
                        Swal.fire(
                            'Exito!',
                            'Producto borrado correctamente',
                            'success'
                        );
                        var URLactual = window.location;
                        window.location.replace(URLactual);
                    },

                    error: function (response) {
                        $("#success").html(response.message)
                        Swal.fire(
                            'Ups!',
                            'No se pudo borrar el producto :(',
                            'error'
                        );
                    }

                });
        }
    });
});

// ------------------------------------------------------- //
// Listado productos
// ------------------------------------------------------ //


// window.onload = function () {
//     this.fetchProducto()
// };

// function fetchProducto() {
//     $.ajax({
//         url: 'http://localhost:8000/api/productos',
//         type: 'GET',
//         success: function (response) {

//             let productos = JSON.parse(response);

//             let template = '';
//             productos.forEach(producto => {
//                 if (producto.categoria == null) {
//                     producto.categoria = "Sin categoria"
//                     producto.categoria_id = null;
//                 }
//                 template += `
//             <tr scope="row" productoId="${producto.id}">
//                     <th scope="row">${producto.id}</th>
//                     <td>${producto.nombre}</td>
//                     <td>${producto.descripcion}</td>
//                     <td>${producto.precio}</td>
//                     <td>${producto.stock}</td>
//                     <td>${producto.categoria}</td>

//                     <td class="d-flex">                      
//                     <a title="editar" class="mr-2" href="http://localhost:8000/admin/productos/${producto.id}/edit">
//                         <button class="action-button-edit">
//                             <i class="fas fa-pen"></i>
//                         </button>
//                     </a>
//                     <button class="producto-delete action-button-delete"><i class="fas fa-trash-alt"></i></button>
//                     </td>
//                   </tr>`
//             });

//             $('#productos').html(template);
//         }
//     });
// }


// ------------------------------------------------------- //
// Borrar Producto con ajax
// ------------------------------------------------------ //

// $(document).on('click', '.producto-delete', function () {
//     Swal.fire({
//         title: '¿Estas seguro?',
//         text: "No podras restaurar el producto!",
//         icon: 'warning',
//         showCancelButton: true,
//         confirmButtonColor: '#0e8ce4',
//         cancelButtonColor: '#d33',
//         confirmButtonText: 'Borrar',
//         cancelButtonText: 'Cancelar'
//     }).then((result) => {
//         if (result.value) {
//             let element = $(this)[0].parentElement.parentElement;
//             let id = $(element).attr('productoId')
//             $.ajax({
//                 headers: {
//                     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//                 },
//                 url: 'http://localhost:8000/admin/productos/' + id,
//                 type: 'DELETE',
//                 success: function (data) {
//                     Swal.fire(
//                         'Exito!',
//                         'Producto borrado correctamente',
//                         'success'
//                     );
//                     fetchProducto();
//                 }
//             });
//         }
//     });
// });





// ------------------------------------------------------- //
// Eliminar Categoria con redirect
// ------------------------------------------------------ //
$(".delete-categoria").click(function (e) {
    e.preventDefault();
    Swal.fire({
        title: '¿Estas seguro?',
        text: "Todas sus subcatgorias seran eliminadas tambien",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#0e8ce4',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Borrar',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.value) {
            var id = $(this).data("id");
            var token = $("meta[name='csrf-token']").attr("content");
            var url = e.target;
            $.ajax(
                {
                    url: "http://localhost:8000/admin/categorias/" + id,
                    type: 'DELETE',
                    data: {
                        _token: token,
                        id: id
                    },
                    success: function (response) {
                        $("#success").html(response.message)
                        Swal.fire(
                            'Exito!',
                            'Categoria borrada correctamente',
                            'success'
                        );
                        var URLactual = window.location;
                        window.location.replace(URLactual);
                    }

                });
        }
    });
});


// ------------------------------------------------------- //
// Eliminar usuario
// ------------------------------------------------------ //

$(".delete-usuario").click(function (e) {
    e.preventDefault();
    Swal.fire({
        title: 'Deseas eliminar este usuario?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#0e8ce4',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Borrar',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.value) {
            var id = $(this).data("id");
            var token = $("meta[name='csrf-token']").attr("content");
            var url = e.target;
            $.ajax(
                {
                    url: "http://localhost:8000/admin/usuarios/" + id,
                    type: 'DELETE',
                    data: {
                        _token: token,
                        id: id
                    },
                    success: function (response) {
                        $("#success").html(response.message)
                        Swal.fire(
                            'Exito!',
                            'El usuario fue eliminado',
                            'success'
                        );
                        var URLactual = window.location;
                        window.location.replace(URLactual);
                    }

                });
        }
    });
});

$(".delete-pedido").click(function (e) {
    e.preventDefault();
    Swal.fire({
        title: 'Deseas eliminar pedido?',
        text: "No se podra recuperar esta informacion",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#0e8ce4',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Borrar',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.value) {
            var id = $(this).data("id");
            var token = $("meta[name='csrf-token']").attr("content");
            var url = e.target;
            $.ajax(
                {
                    url: "http://localhost:8000/admin/pedidos/" + id,
                    type: 'DELETE',
                    data: {
                        _token: token,
                        id: id
                    },
                    success: function (response) {
                        $("#success").html(response.message)
                        Swal.fire(
                            'Exito!',
                            'El pedido fue eliminado',
                            'success'
                        );
                        var URLactual = window.location;
                        window.location.replace(URLactual);
                    }

                });
        }
    });
});
    

$(".delete-mensaje").click(function (e) {
    
    Swal.fire({
        title: 'Eliminar el mensaje?',
        text: "",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#0e8ce4',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Borrar',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.value) {
            var id = $(this).data("id");
            var token = $("meta[name='csrf-token']").attr("content");
            var url = e.target;
            $.ajax(
                {
                    url: "http://localhost:8000/admin/borrarMensaje/"+id,
                    type: 'GET',
                    data: {
                        _token: token,
                        id: id
                    },
                    success: function (response) {
                        $("#success").html(response.message)
                        Swal.fire(
                            'Exito!',
                            'El mensaje se elimino',
                            'success'
                        );
                        var URLactual = window.location;
                        window.location.replace(URLactual);
                    }

                });
        }
    });
});