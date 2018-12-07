<?php require('seguridad.php') ?>
<!DOCTYPE html>

<html lang="es">
<head>
	<meta charset="utf-8" />
	<meta name="viewport"
		content="width=device-width, initial-scale=1, maximum-scale=1" />
	<title>Página de Inicio</title>
	<link rel="stylesheet" href="css/normalize.css" />
	<link rel="stylesheet" href="css/puls4.css" />
	<script src="jquery-2.0.3.min.js"></script>
</head>
<body>
	<header>
		<div class="logo">
			<img src="imagenes/peguy.jpg" alt="Puls4" />
		</div>
		<div class="titular">
			<h1 class="titulo">
				"PEGUY" La Mejor Forma de APPrender
			</h1>
			<div>

				<a class="publicar" href="#">
					Publicar
				</a>
			</div>
			<div>
				<a href="#12" class="sizer">A</a>
				<a href="#17" class="sizer">A</a>
				<a href="#22" class="sizer">A</a>
			</div>
		</div>
		<div class="usuario">
			<figure class="avatar">
				<img src="imagenes/avatar.jpg" alt="freddier" />
				<a href="cerrasecion.php"></a>
			</figure>
			<a class="flechita" href="#"></a>
		</div>
	</header>
	<nav>
		<ul class="menu">
		
			<li><a href="cerrarsesion.php">Cerrar Sesión</a></li>
		</ul>
	</nav>
	<form action="">
		<p>
			<label for="titulo">Título</label>
			<input placeholder="Ingrese el título" id="titulo" type="text" name="titulo"></p>
		<p>
			<label for="autor">Autor</label>
			<input id="autor" type="text" name="autor"></p>
		<p>
			<label for="tag">Tag</label>
			<input id="tag" type="text" name="tag"></p>
			<input value="Publicar" type="submit" />
	</form>
	<section class="posts">
		<article class="post">
			<div class="descripcion">
				<figure class="imagen">
					<img src="imagenes/panda.png" />
				</figure>
				<div class="detalles">
					<h2 class="titulo">
						P A N D A
					</h2>
					<p class="autor">
						referencia de  <a href="#">PEGUY</a>
					</p>
					<a class="tag" href="#">panda</a>

				</div>
			</div>
			<div class="acciones">
				<div class="votos">
					<a class="up" href="#"></a>
					<span class="total">12</span>

					<a class="down" href="#"></a>
				</div>
				<div class="datos">
					<a class="comentarios" href="#">
						10
					</a>
					<a class="estrellita" href="#"></a>
				</div>
			</div>
		</article>
		<article class="post">
			<div class="descripcion">
				<figure class="imagen">
					<img src="imagenes/rosa.png" />
				</figure>
				<div class="detalles">
					<h2 class="titulo">
						R O S A
					</h2>
					<p class="autor">
						referencia de  <a href="#">PEGUY</a>
					</p>
					<a class="tag" href="#">rosa</a>

				</div>
			</div>
			<div class="acciones">
				<div class="votos">
					<a class="up" href="#"></a>
					<span class="total">69</span>
					<a class="down" href="#"></a>
				</div>
				<div class="datos">
					<a class="comentarios" href="#">
						10
					</a>
					<a class="estrellita" href="#"></a>
				</div>
			</div>
		</article>
		<article class="post">
			<div class="descripcion">
				<figure class="imagen">
					<img src="imagenes/muñeca.jpg" />
				</figure>
				<div class="detalles">
					<h2 class="titulo">
						M U Ñ E C A
					</h2>
					<p class="autor">
						referencia de <a href="#">PEGUY</a>
					</p>
					<a class="tag" href="#">muñeca</a>

				</div>
			</div>
			<div class="acciones">
				<div class="votos">
					<a class="up" href="#"></a>
					<span class="total">3</span>
					<a class="down" href="#"></a>
				</div>
				<div class="datos">
					<a class="comentarios" href="#">
						10
					</a>
					<a class="estrellita" href="#"></a>
				</div>
			</div>
		</article>
		<article class="post">
			<div class="descripcion">
				<figure class="imagen">
					<img src="imagenes/auto.jpg" />
				</figure>
				<div class="detalles">
					<h2 class="titulo">
						A U T O
					</h2>
					<p class="autor">
						referencia de <a href="#">PEGUY</a>
					</p>
					<a class="tag" href="#">auto</a>

				</div>
			</div>
			<div class="acciones">
				<div class="votos">
					<a class="up" href="#"></a>
					<span class="total">156</span>
					<a class="down" href="#"></a>
				</div>
				<div class="datos">
					<a class="comentarios" href="#">
						10
					</a>
					<a class="estrellita" href="#"></a>
				</div>
			</div>
		</article>
		<article class="post">
			<div class="descripcion">
				<figure class="imagen">
					<img src="imagenes/perros.jpg" />
				</figure>
				<div class="detalles">
					<h2 class="titulo">
						C A C H O R R O S
					</h2>
					<p class="autor">
						referencia de <a href="#">PEGUY</a>
					</p>
					<a class="tag" href="#">cachorros</a>

				</div>
			</div>
			<div class="acciones">
				<div class="votos">
					<a class="up" href="#"></a>
					<span class="total">156</span>
					<a class="down" href="#"></a>
				</div>
				<div class="datos">
					<a class="comentarios" href="#">
						10
					</a>
					<a class="estrellita" href="#"></a>
				</div>
			</div>
		</article>
		<article class="post">
			<div class="descripcion">
				<figure class="imagen">
					<img src="imagenes/cojín.jpg" />
				</figure>
				<div class="detalles">
					<h2 class="titulo">
						A L M O H A D A
					</h2>
					<p class="autor">
						referencia de <a href="#">PEGUY</a>
					</p>
					<a class="tag" href="#">almohada</a>

				</div>
			</div>
			<div class="acciones">
				<div class="votos">
					<a class="up" href="#"></a>
					<span class="total">156</span>
					<a class="down" href="#"></a>
				</div>
				<div class="datos">
					<a class="comentarios" href="#">
						10
					</a>
					<a class="estrellita" href="#"></a>
				</div>
			</div>
		</article>
	</section>
	<footer>
		<h3>
			<strong>APPRENDE CON PEGUY</strong>
			<span class="mejor">
				LA MEJOR APLICACIÓN
			</span>
		</h3>
	</footer>
	<script>
	$(function(){
		$('.publicar').on('click', mostrarFormulario);

		function mostrarFormulario() {
			$('form').slideToggle();
		}

		$('form').on('submit', procesarFormulario);

		function procesarFormulario(ev) {
			ev.preventDefault();
			var titulo = $('input[name=titulo]').val();
			var autor = $('input[name=autor]').val();
			var tag = $('input[name=tag]').val();

			var template = '<article class="post"> \
				<div class="descripcion"> \
					<figure class="imagen"> \
						<img src="imagenes/foto.jpg" /> \
					</figure> \
					<div class="detalles"> \
						<h2 class="titulo"> \
							'+titulo+' \
						</h2> \
						<p class="autor"> \
							por <a href="#">'+autor+'</a> \
						</p> \
						<a class="tag" href="#">'+tag+'</a> \
						<p class="fecha">hace <strong>0</strong> min</p> \
					</div> \
				</div> \
				<div class="acciones"> \
					<div class="votos"> \
						<a class="up" href="#"></a> \
						<span class="total">0</span> \
						<a class="down" href="#"></a> \
					</div> \
					<div class="datos"> \
						<a class="comentarios" href="#"> \
							0 \
						</a> \
						<a class="estrellita" href="#"></a> \
					</div> \
				</div> \
			</article>';

			$('.posts').prepend($(template).fadeIn());
			$('input[type=text]').val('');
			$('form').slideUp();
		}

		function crearSizer(pixels) {
			return function() {
				$('body').css('font-size', pixels+'px');
			}
		}

		$('.sizer').each(function(i, link){
			var pixels = $(link).prop('hash').substring(1);
			$(link)
				.css('font-size', pixels+'px')
				.on('click', crearSizer(pixels));
		});

		function crearContador(valorInicial) {
			var contador = valorInicial || 0;
			return {
				up : function() {
					return ++contador;
				},
				down : function() {
					return --contador;
				}
			};
		};

		$('.total').each(function(i, elem) {
			var contTotal = crearContador(elem.innerHTML);
			$(elem)
				.siblings('.up')
					.on('click', function(ev) {
						ev.preventDefault();
						$(elem).html(contTotal.up());
					})
				.siblings('.down')
					.on('click', function(ev){
						ev.preventDefault();
						$(elem).html(contTotal.down());
					});
		});
	});
	</script>
</body>
</html>