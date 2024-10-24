 <!-- <?php
// Verificar si se enviaron datos a través del formulario
//if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Conectar a la base de datos
    //$conexion = new mysqli("localhost", "root", "", "usuarios_bd");

    // Verificar si la conexión es exitosa
    //if ($conexion->connect_error) {
    //    die("Error de conexión: " . $conexion->connect_error);
    //}

    // Obtener los datos del formulario
    //$usuario = $_POST['usuario'];
    //$correo = $_POST['correo'];
    //$contraseña = password_hash($_POST['contraseña'], PASSWORD_BCRYPT); // Cifrar la contraseña

    // Preparar la consulta para evitar inyecciones SQL
    //$stmt = $conexion->prepare("INSERT INTO usuarios (usuario, correo, contraseña) VALUES (?, ?, ?)");
   // $stmt->bind_param("sss", $usuario, $correo, $contraseña);

    // // Ejecutar la consulta
    // if ($stmt->execute()) {
    //     echo "Registro exitoso";
    // } else {
    //     echo "Error: " . $stmt->error;
    // }

    // Cerrar la consulta y la conexión
   // $stmt->close();
    //$conexion->close();
//}
// ?>  -->



<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	
	<title>Falta de agua</title>
	<!-- estilos CSS -->
	<link rel="stylesheet" href="css/estilos.css">
	<!-- fuentes -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<!-- Icon fonts -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css"
		integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	<!-- Favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="images/company.png">
	<link rel="icon" type="image/png" sizes="32x32" href="images/agua (2).png">
	<link rel="icon" type="image/png" sizes="16x16" href="images/agua (2).png">
	<link rel="manifest" href="images/site.webmanifest">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">

</head>

<body>
	

	  <!-- Cabecera y cuerpo principal -->
	  <header>
        <!-- Aquí va tu contenido ya existente -->
    </header>

    <main>
        <!-- Aquí también tu contenido principal ya existente -->
    </main>

    <!-- Botón para iniciar sesión -->
    <button id="login-btn">Iniciar Sesión</button>

    <!-- Formulario de inicio de sesión -->
    <div id="login-form">
        <div class="form-container">
            <span class="close-btn" id="close-btn">&times;</span>
            <h2>Iniciar Sesión</h2>
    <form method="POST" action="">
        <label for="username">Usuario</label>
        <input type="text" id="usuario" name="usuario" placeholder="Ingresa tu usuario" required>
        
        <label for="email">Correo</label>
        <input type="email" id="correo" name="correo" placeholder="Ingresa tu correo" required>
        
        <label for="password">Contraseña</label>
        <input type="password" id="contraseña" name="contraseña" placeholder="Ingresa tu contraseña" required>

        <button type="submit">Enviar</button>
            </form>
        </div>
    </div>

    <script>
        // Mostrar el formulario cuando se haga clic en el botón "Iniciar Sesión"
        document.getElementById('login-btn').addEventListener('click', function() {
            document.getElementById('login-form').style.display = 'flex';
        });

        // Ocultar el formulario cuando se haga clic en la "X"
        document.getElementById('close-btn').addEventListener('click', function() {
            document.getElementById('login-form').style.display = 'none';
        });
    </script>



	<!-- Cabecera -->
	<div class="top">
		<ul class="container">
			<li><svg xmlns="http://www.w3.org/2000/svg" height="20" width="20" viewBox="0 0 512 512">
					<path fill="#FFD43B"
						d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z" />
				</svg> 1-234-567-8910</li>
			<li><svg xmlns="http://www.w3.org/2000/svg" height="20" width="20" viewBox="0 0 512 512">
					<path fill="#FFD43B"
						d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z" />
				</svg>Informacion@mail.com</li>
		</ul>
	</div>
	<header>
		<nav id="navbar">
			<div id="navegation" class="container">
				<a href="index.php"><img src="images/icons8-bosque-50.png" alt="Logotipo"></a>
				<span id="navbar-toggle">
					<svg xmlns="http://www.w3.org/2000/svg" height="20" width="17.5" viewBox="0 0 448 512">
						<!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
						<path fill="#ffffff"
							d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z" />
					</svg>
				</span>

				<ul id="main-nav">
					<li><a href="index.php">Home</a></li>
					<li><a href="Experiencia.html">Uso de agua</a></li>
					<li><a href="ubicacion.html">Instituciones </a></li>
					<li><a href="contacto.html">contacto</a></li>
					<li><svg xmlns="http://www.w3.org/2000/svg" height="20" width="20" viewBox="0 0 512 512">H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z"/></svg>
						
							<path
								d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z" />
						</svg> 597-975-5287 </li>
				</ul>
			</div>
		</nav>
	</header>
	<!-- cuerpo del documento -->


	<main>
		<article id="home">
			<section>
				<div id="seccionPrimera" class="container">
					<div>
						<h1>La Concientizacion a la falta de agua</h1>
						<p>y el desperdicio de la misma </p>
						<a href="cotizacion.html">Como reciclar el agua</a>
					</div>

				</div>
			</section>
			<section>
				<img src="images/Naturaleza hermosa - Océano Pacífico.mp4" alt="">
				<div id="seccionSegundo" class="container">
					<div>
						<h2>Concientizacion de agua</h2>
						<p>¡Bienvenido a nuestra plataforma dedicada a abordar uno de los desafíos más apremiantes de
							nuestro tiempo: la escasez de agua! Reconocemos la importancia crítica de este recurso
							natural y nos comprometemos a informar, educar y motivar a individuos y comunidades para que
							tomen medidas concretas en su conservación y uso sostenible.</p>
						<a class="btn" href="Experiencia.html">conocer mas</a>

					</div>

					<img src="images/ahorrar-agua.png" alt="imagen de dos personas estirando la mano">

				</div>
			</section>
			<section>
				<div id="seccionTercera" class="container">
					<img src="images/alcantarilla.png" alt="imagen una alcantarilla">
					<div>
						<h2>Contaminacion en el agua</h2>
						<p>La contaminación del agua es un problema grave que afecta a muchas partes del mundo. Se
							refiere a la introducción de sustancias nocivas en cuerpos de agua como ríos, lagos, océanos
							y acuíferos, lo que puede tener graves consecuencias para la salud humana, la vida silvestre
							y el medio ambiente en general.</p>

					</div>
				</div>
			</section>
			<section>
				<h2>Tipos de contaminacion del agua</h2>


				<div id="seccionCuarta" class="container">
					<div class="col">
						<img src="images/la-contaminacion-del-agua (1).png" alt="">

						<path fill="#FFD43B"
							d="M184 48H328c4.4 0 8 3.6 8 8V96H176V56c0-4.4 3.6-8 8-8zm-56 8V96H64C28.7 96 0 124.7 0 160V416c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V160c0-35.3-28.7-64-64-64H384V56c0-30.9-25.1-56-56-56H184c-30.9 0-56 25.1-56 56zm96 152c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v48h48c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H288v48c0 8.8-7.2 16-16 16H240c-8.8 0-16-7.2-16-16V320H176c-8.8 0-16-7.2-16-16V272c0-8.8 7.2-16 16-16h48V208z" />
						</svg>
						<h3>Vertidos industriales:</h3>
						<p> Muchas industrias liberan productos químicos y desechos tóxicos
							directamente en cuerpos de agua, lo que puede contaminarlos gravemente.</p>
					</div>
					<div class="col">
						<img src="images/agricultura (1).png" alt="">
						<path fill="#FFD43B"
							d="M176 8c-6.6 0-12.4 4-14.9 10.1l-29.4 74L55.6 68.9c-6.3-1.9-13.1 .2-17.2 5.3s-4.6 12.2-1.4 17.9l39.5 69.1L10.9 206.4c-5.4 3.7-8 10.3-6.5 16.7s6.7 11.2 13.1 12.2l78.7 12.2L90.6 327c-.5 6.5 3.1 12.7 9 15.5s12.9 1.8 17.8-2.6l35.3-32.5 9.5-35.4 10.4-38.6c8-29.9 30.5-52.1 57.9-60.9l41-59.2c11.3-16.3 26.4-28.9 43.5-37.2c-.4-.6-.8-1.2-1.3-1.8c-4.1-5.1-10.9-7.2-17.2-5.3L220.3 92.1l-29.4-74C188.4 12 182.6 8 176 8zM367.7 161.5l135.6 36.3c6.5 1.8 11.3 7.4 11.8 14.2l4.6 56.5-201.5-54 32.2-46.6c3.8-5.6 10.8-8.1 17.3-6.4zm-69.9-30l-47.9 69.3c-21.6 3-40.3 18.6-46.3 41l-10.4 38.6-16.6 61.8-8.3 30.9c-4.6 17.1 5.6 34.6 22.6 39.2l15.5 4.1c17.1 4.6 34.6-5.6 39.2-22.6l8.3-30.9 247.3 66.3-8.3 30.9c-4.6 17.1 5.6 34.6 22.6 39.2l15.5 4.1c17.1 4.6 34.6-5.6 39.2-22.6l8.3-30.9L595 388l10.4-38.6c6-22.4-2.5-45.2-19.6-58.7l-6.8-84c-2.7-33.7-26.4-62-59-70.8L384.2 99.7c-32.7-8.8-67.3 4-86.5 31.8zm-17 131a24 24 0 1 1 -12.4 46.4 24 24 0 1 1 12.4-46.4zm217.9 83.2A24 24 0 1 1 545 358.1a24 24 0 1 1 -46.4-12.4z" />
						</svg>
						<h3>Agricultura:</h3>
						<p>El uso de pesticidas, herbicidas y fertilizantes en la agricultura puede contaminar el agua
							cuando se lavan de los campos y se filtran en los cuerpos de agua cercanos.</p>
					</div>
					<div class="col">
						<img src="images/el-plastico (1).png" alt="">

						<path fill="#FFD43B"
							d="M192 96a48 48 0 1 0 0-96 48 48 0 1 0 0 96zM120.5 247.2c12.4-4.7 18.7-18.5 14-30.9s-18.5-18.7-30.9-14C43.1 225.1 0 283.5 0 352c0 88.4 71.6 160 160 160c61.2 0 114.3-34.3 141.2-84.7c6.2-11.7 1.8-26.2-9.9-32.5s-26.2-1.8-32.5 9.9C240 440 202.8 464 160 464C98.1 464 48 413.9 48 352c0-47.9 30.1-88.8 72.5-104.8zM259.8 176l-1.9-9.7c-4.5-22.3-24-38.3-46.8-38.3c-30.1 0-52.7 27.5-46.8 57l23.1 115.5c6 29.9 32.2 51.4 62.8 51.4h5.1c.4 0 .8 0 1.3 0h94.1c6.7 0 12.6 4.1 15 10.4L402 459.2c6 16.1 23.8 24.6 40.1 19.1l48-16c16.8-5.6 25.8-23.7 20.2-40.5s-23.7-25.8-40.5-20.2l-18.7 6.2-25.5-68c-11.7-31.2-41.6-51.9-74.9-51.9H282.2l-9.6-48H336c17.7 0 32-14.3 32-32s-14.3-32-32-32H259.8z" />
						</svg>
						<h3>Residuos sólidos:</h3>
						<p>La basura y los desechos sólidos, como plásticos, vidrio y metal, pueden terminar en ríos y
							océanos, causando contaminación y representando riesgos para la vida marina.</p>
					</div>
					<div class="col">
						<img src="images/derrame-de-petroleo (1).png" alt="">
						<path fill="#FFD43B"
							d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-96 55.2C54 332.9 0 401.3 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7c0-81-54-149.4-128-171.1V362c27.6 7.1 48 32.2 48 62v40c0 8.8-7.2 16-16 16H336c-8.8 0-16-7.2-16-16s7.2-16 16-16V424c0-17.7-14.3-32-32-32s-32 14.3-32 32v24c8.8 0 16 7.2 16 16s-7.2 16-16 16H256c-8.8 0-16-7.2-16-16V424c0-29.8 20.4-54.9 48-62V304.9c-6-.6-12.1-.9-18.3-.9H178.3c-6.2 0-12.3 .3-18.3 .9v65.4c23.1 6.9 40 28.3 40 53.7c0 30.9-25.1 56-56 56s-56-25.1-56-56c0-25.4 16.9-46.8 40-53.7V311.2zM144 448a24 24 0 1 0 0-48 24 24 0 1 0 0 48z" />
						</svg>
						<h3>Derrames de petróleo:</h3>
						<p>Los derrames de petróleo en el mar y en cuerpos de agua continentales pueden tener efectos
							devastadores en los ecosistemas acuáticos y en las comunidades que dependen del agua para su
							sustento.</p>
					</div>
				</div>
			</section>
			<section>
				<div id="seccionQuinta" class="container">
					<div>
						<h2>¿Necesitas contactarnos para mas informacion?</h2>
						<p>contactenos ahora mismo para una consulta gratuita</p>
					</div>
					<a class="btn" href="contacto.html">consultar</a>
				</div>
			</section>
		</article>
	</main>
	<!-- pie de pagina -->
	<footer>
		<div id="PieDePagina" class="container">
			<div>
				<h3>corporativo</h3>
				<ul>
					<li><a href="socios.html">socios</a></li>
					<li><a href="empleos.html">trabaja con nosotros</a></li>
					<li><a href="contacto.html">contacto</a></li>
				</ul>
			</div>
			<div>
				<h3>legal</h3>
				<ul>
					<li><a href="condiciones.html">terminos y condiciones</a></li>
					<li><a href="privacidad.html">politica de privacidad</a></li>
				</ul>
			</div>
			<div>
				
				<div id="social">
					<a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="20" width="20" viewBox="0 0 512 512">
							<path fill="#ffffff"
								d="M512 256C512 114.6 397.4 0 256 0S0 114.6 0 256C0 376 82.7 476.8 194.2 504.5V334.2H141.4V256h52.8V222.3c0-87.1 39.4-127.5 125-127.5c16.2 0 44.2 3.2 55.7 6.4V172c-6-.6-16.5-1-29.6-1c-42 0-58.2 15.9-58.2 57.2V256h83.6l-14.4 78.2H287V510.1C413.8 494.8 512 386.9 512 256h0z" />
						</svg></a>
					<a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="20" width="20" viewBox="0 0 512 512">
							<path fill="#ffffff"
								d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z" />
						</svg></a>
					<a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="20" width="17.5" viewBox="0 0 448 512">
							<path fill="#ffffff"
								d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z" />
						</svg></a>
				</div>
			</div>
		</div>
		<div id="copyRight">
			&copy Derechos Reservados
		</div>
	</footer>
	<script>
		// Comportamientos para el menú de navegación.
		let mainNav = document.getElementById('main-nav');
		let navbarToggle = document.getElementById('navbar-toggle');
		navbarToggle.addEventListener('click', function () {

			if (this.classList.contains('active')) {
				mainNav.style.display = "none";
				this.classList.remove('active');
			}
			else {
				mainNav.style.display = "flex";
				this.classList.add('active');
			}
		});
	</script>
</body>

</html>