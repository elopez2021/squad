<?php
include("config.php");


     
 ?>


<!DOCTYPE html>
<html lang="es">
<head> 
	<style> 

	</style>
	
	
	<meta charset="UTF-8"> 
	<title>Tokyo</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&display=swap" rel="stylesheet">
	<link rel="Shortcut icon" type="image/x-icon" href="imagenes/asd.ico">


</head>
<body>
	
	<header>
		<div class="logotipo"> 
			 <h1 class="tilprin">-Tokyo-</h1>
		</div>

		
		<nav><a id="Inicio"></a>
				<ul>
					<li><a href="#Inicio">Registrate</a> </li>
					<li><a href="comp.html">Acerca de</a></li>
					<li><a href="formulario.html">formulario de contacto</a></li>
					<li><a href="index..html.html">Inicio</a></li>
				</ul>
		</nav>
		
		
		<div class="contact_form">

		<div class="formulario">			
      <h1 class="h1formulario">Formulario de contacto</h1>
				<h3 class="h3formulario">Escríbenos y en breve los pondremos en contacto contigo</h3>


					<form action="insertar.php" method="post">				

						
								<p>
				<label for="nombre" class="colocar_nombre">Nombre
						<span class="obligatorio">*</span>
									</label>
										<input type="text" name="nombre" id="nombre" required="obligatorio" placeholder="Escribe tu nombre">
								</p>
							
								<p>
									<label for="email" class="colocar_email">Email
										<span class="obligatorio">*</span>
									</label>
										<input type="email" name="email" id="email" required="obligatorio" placeholder="Escribe tu Email">
								</p>
						
								<p>
									<label for="telefono" class="colocar_telefono">Teléfono
									</label>
										<input type="tel" name="telefono" id="telefono" placeholder="Escribe tu teléfono">
								</p>		
							
								<p>
									<label for="sitio_web" class="colocar_website">Sitio web
									</label>
										<input type="url" name="sitio_web" id="sitio_web" placeholder="Escribe la URL de tu web">
								</p>		
							
								<p>
									<label for="asunto" class="colocar_asunto">Asunto
										<span class="obligatorio">*</span>
									</label>
										<input type="text" name="asunto" id="asunto" required="obligatorio" placeholder="Escribe un asunto">
								</p>		
							
								<p>
									<label for="mensaje" class="colocar_mensaje">Mensaje
										<span class="obligatorio">*</span>
									</label>                     
                               		  <textarea name="mensaje" class="texto_mensaje" id="mensaje" required="obligatorio" placeholder="Deja aquí tu comentario..."></textarea> 
                               	</p>	  								
							
								<button type="submit" name="enviar_formulario" id="enviar"><p>Enviar</p></button>

								<p class="aviso">
									<span class="obligatorio"> * </span>los campos son obligatorios.
								</p>					
						
					</form>
		</div>	
	</div>
		
	</header>

  

</body>
</html>


