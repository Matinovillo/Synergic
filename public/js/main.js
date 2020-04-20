const btnDepartamentos = document.getElementById('btn-departamentos'),
	btnCerrarMenu = document.getElementById('btn-menu-cerrar'),
	grid = document.getElementById('grid'),
	contenedorEnlacesNav = document.querySelector('#menu .contenedor-enlaces-nav'),
	contenedorSubCategorias = document.querySelector('#grid .contenedor-subcategorias'),
	esDispositivoMovil = () => window.innerWidth <= 800;

btnDepartamentos.addEventListener('mouseover', () => {
	if (!esDispositivoMovil()) {
		grid.classList.add('activo');
	}
});

grid.addEventListener('mouseleave', () => {
	if (!esDispositivoMovil()) {
		grid.classList.remove('activo');
	}
});

document.querySelectorAll('#menu .categorias a').forEach((elemento) => {
	elemento.addEventListener('mouseenter', (e) => {
		if (!esDispositivoMovil()) {
			document.querySelectorAll('#menu .subcategoria').forEach((categoria) => {
				categoria.classList.remove('activo');
				if (categoria.dataset.categoria == e.target.dataset.categoria) {
					categoria.classList.add('activo');
				}
			});
		};
	});
});

// EventListeners para dispositivo movil.
document.querySelector('#btn-menu-barras').addEventListener('click', (e) => {
	e.preventDefault();
	if (contenedorEnlacesNav.classList.contains('activo')) {
		contenedorEnlacesNav.classList.remove('activo');
		document.querySelector('body').style.overflow = 'visible';
	} else {
		contenedorEnlacesNav.classList.add('activo');
		document.querySelector('body').style.overflow = 'hidden';
	}
});

// Click en boton de todos los departamentos (Para version movil).
btnDepartamentos.addEventListener('click', (e) => {
	e.preventDefault();
	grid.classList.add('activo');
	btnCerrarMenu.classList.add('activo');
});

// Boton de regresar en el menu de categorias
document.querySelector('#grid .categorias .btn-regresar').addEventListener('click', (e) => {
	e.preventDefault();
	grid.classList.remove('activo');
	btnCerrarMenu.classList.remove('activo');
});

document.querySelectorAll('#menu .categorias a').forEach((elemento) => {
	elemento.addEventListener('click', (e) => {
		if (esDispositivoMovil()) {
			contenedorSubCategorias.classList.add('activo');
			document.querySelectorAll('#menu .subcategoria').forEach((categoria) => {
				categoria.classList.remove('activo');
				if (categoria.dataset.categoria == e.target.dataset.categoria) {
					categoria.classList.add('activo');
				}
			});
		}
	});
});

// Boton de regresar en el menu de categorias
document.querySelectorAll('#grid .contenedor-subcategorias .btn-regresar').forEach((boton) => {
	boton.addEventListener('click', (e) => {
		e.preventDefault();
		contenedorSubCategorias.classList.remove('activo');
	});
});

btnCerrarMenu.addEventListener('click', (e) => {
	e.preventDefault();
	document.querySelectorAll('#menu .activo').forEach((elemento) => {
		elemento.classList.remove('activo');
	});
	document.querySelector('body').style.overflow = 'visible';
});



$(".addtocart").click(function (e) {
	e.preventDefault()
	Swal.fire({
		title: '<strong>Hola usuario!</strong>',
		icon: 'info',
		html:
			'Para realizar una compra debes ' +
			'<a href="/login">Ingresar!</a> ' +
			'Si no tenes una cuenta registrate <a href="/register">Aca!</a> ',
		showCloseButton: true,
		showCancelButton: true,
		focusConfirm: false,
	})
});


$('.owl-carousel').owlCarousel({
	loop: false,
	nav: true,
	dots: false,
	navText: ["<i class='fas fa-angle-double-left'></i>", "<i class='fas fa-angle-double-right'></i>"],

	slideBy: '1',
	// center: false,
	responsive: {
		0: {
			items: 1
		},
		600: {
			items: 3
		},
		1000: {
			items: 4
		}
	}
})


$(".favorite-add").click(function (e) {
	e.preventDefault()
	let id = $(this).data("id");
	let token = $("meta[name='csrf-token']").attr("content");
	$.ajax(
		{
			url: "http://localhost:8000/add-to-favorito/" + id,
			type: 'POST',
			data: {
				_token: token,
				id: id
			},
			success: function (response) {
				Swal.fire(
					'El producto se añadio a tus favoritos',
					'',
					'success'
				)
			}

		});
});
