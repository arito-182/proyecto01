<?php

    session_start();
    if(isset($_SESSION['usuario'])){
      header("location: Bienvenido.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="login" content="width-device-width, initial-scale=1.0" />
    <title>Login y registro - SerLans</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css"/>
  </head>

  <body>
    <main>
      <div class="contenedor__todo">
          <div class="caja__trasera">
            <div class="caja__trasera-login">
              <h1>SerLans</h1>
              <p>Iniciar Sesión</p>
              <button id="btn__Iniciar-Sesión">Iniciar Sesión</button>
            </div>

            <div class="caja__trasera-register">
            <h1>SerLans</h1>
            <p>Registro</p>
            <button id="btn__registrarse">Regístrarse</button>
            </div>
          </div>
        <!--formularios de ingreso y registro-->

        <div class="contenedor__login-register">

          <!--formulario de ingreso-->
          <form action="php/login_usuario_be.php" method="POST" class="formulario__login">
            <h2>Iniciar Sesión</h2>
            <input type="text" placeholder="Correo electrónico" name="correo">
            <input type="password" placeholder="Contraseña" name= "contrasena">
            <button>Entrar</button>
          </form>

          <!--formulario de registro--> <!--action="php/registro_usuario_be.php" es para que nos almacene los datos en la base de la tabla usuarios-->
          <form action="php/registro_usuario_be.php" method="POST" class="formulario__register">
            <h2>Crear Usuario</h2>
            <input type="text" placeholder="Nombre completo" name="nombre_completo">
            <input type="text" placeholder="Correo electrónico" name="correo">
            <input type="text" placeholder="Usuario" name="usuario">
            <input type="password" placeholder="Contraseña" name="contrasena">
            <button>Regístrarse</button>
          </form>
        </div>

      </div>
    </main>
    <script src="proyecto01/js/login.js"></script>
  </body>
</html>
