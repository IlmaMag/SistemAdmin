<?php
include 'C:\xampp\htdocs\PAGINA WEB\Red Social HTML y CSS\php\conexion1.php' ; 
?>

<!DOCTYPE html>
<html>
	<head>
        <meta charset="UTF-8"/>
		<title>Red Social</title>
		
		<link href="css/estilo.css" rel="stylesheet" > 
	</head>
    <body>
	
		<header>
			<div id="logo">
				<img src="img/logo.jpg" alt="logo">
			</div>
	
		</header>

        <section id="Formulario">
            <h2>Registrate</h2>
            <form name="Nuevo usuario" method="post" action="php/ConexionCrearUsuario.php">
                nickname: <br>
                <input type="text" name="nickname" pattern="[a-zA-Z0-9]+" placeholder="Ingrese su Nickname" required><br>
                
                nombre: <br>
                <input type="text" name="nombre"  placeholder="Ingrese su Nombre" required><br>
                
                apellido: <br>
                <input type="text" name="apellido"  placeholder="Ingrese su Apellido" required><br>

                edad: <br>
                <input type="number" name="edad" min="16" placeholder="Ingrese su Edad" required><br>

                descripcion: <br>
                <textarea name="descripcion" placeholder="Ingrese su Descripcion" required></textarea><br>

                contraseña: <br>
                <input type="password" name="contraseña" maxlength="20" autocomplete="new-password" placeholder="Ingrese su contraseña" required><br>

                <input type="submit" name="enviar" class="boton" value="Registrate" >
                <input type="reset" class="boton" value="Borrar">

                <hr>
            </form> 
        </section>




        <section id="Formulario2">
            <h2>Inicia sesion </h2>
            <form name="contacto" method="post" action="php/ConexionCrearUsuario.php">
                Nickname<br>
                <input type="text" name="nickname" placeholder="Ingrese su apodo" required><br>

                Contraseña: <br>
                <input type="password" name="contraseña"  autocomplete="off" placeholder="Ingrese su contraseña" required><br>

                <hr> <!-- Linea -->
                <input type="submit" name="enviar" class="boton" value="IniciarSesion">
            </form>

        </section>



		<footer>
			<p> Copyright &copy; 2024,  Ilma Magda </p>
		</footer>
	
	
	</body>
</html>

