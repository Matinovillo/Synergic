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


//Si el usuario no esta logueado al comprar muestra el modal login
$(".addtocart").click(function (e) {
	e.preventDefault()
	$('#LoginModal').modal('show')
});

//Slider de productos
$('.owl-carousel').owlCarousel({
	loop: true,
	nav: true,
	dots: false,
	navText: ["<i class='fas fa-angle-double-left'></i>", "<i class='fas fa-angle-double-right'></i>"],
	slideBy: '1',
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


//Function
function desoradd(id, item) {
	let add = "http://localhost:8000/add-to-favorito/" + id;
	let destroy = "http://localhost:8000/favorito/destroy/" + id;
	if (item.classList.contains('text-danger')) {
		return destroy;
	} else {
		return add;
	}
}

//Añadir a favoritos
$(".favorite-add").click(function (e) {
	e.preventDefault()
	let id = $(this).data("id");
	let token = $("meta[name='csrf-token']").attr("content");
	$.ajax(
		{
			url: desoradd(id, this),
			type: 'POST',
			data: {
				_token: token,
				id: id
			},
			success: function (response) {
				$("#favorite" + id).toggleClass('text-danger', 'text-primary');
				Swal.fire(
					'El producto se añadio a tus favoritos',
					'',
					'success'
				)
			}

		});
});


//Validaciones del login desde el frontend
let campoEmail = document.getElementById('campoLoginEmail');
let campoPassword = document.getElementById('campoLoginPassword');
let emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/

campoEmail.onblur = function () {
	if (this.value.trim() == '') {
		campoEmail.parentElement.querySelector('b').innerText = "Este campo es obligatorio";
		campoEmail.classList.add('validationBorder')
	} else if (!emailRegex.test(this.value)) {
		campoEmail.parentElement.querySelector('b').innerText = "El email ingresado no tiene un formato valido";
		campoEmail.classList.add('validationBorder')
	} else{
		campoEmail.classList.remove('validationBorder')
		campoEmail.parentElement.querySelector('b').innerText = "";
	}
}
campoPassword.onblur = function () {
	if (this.value.trim() == '') {
		campoPassword.parentElement.querySelector('b').innerText = "Este campo es obligatorio";
		campoPassword.classList.add('validationBorder')
	}else{
		campoPassword.classList.remove('validationBorder')
		campoPassword.parentElement.querySelector('b').innerText = "";
	}
}


$('#formulario-iniciar-sesion').submit(function (e) {
	e.preventDefault()
	let formulario = $('#formulario-iniciar-sesion').serialize();
	$.ajax({
		method: 'post',
		url: '/validacion-iniciar-sesion',
		data: formulario,
		success: function (res) {
			location.reload();
		},
		error: function (error) {
			let errores = error.responseJSON.errors;
			Swal.fire({
				icon: 'error',
				title: '',
				text: errores.login[0],
			})
		},
	});
});


//Producto sin stock


$('.cantaddtocart').click(function (e) {
	e.preventDefault();

	Swal.fire({
		icon: 'error',
		title: '',
		text: 'Este producto no esta disponible',
	})
})