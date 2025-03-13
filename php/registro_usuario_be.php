<?php
    //variable para acceso a la base//
    include 'conexion_be.php';

    $nombre_completo = $_POST['nombre_completo'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $Contrasena = $_POST['contrasena'];  // Mantienes $Contrasena
    $Contrasena = hash('sha512', $Contrasena);   // Ahora usas la misma variable para encriptar la contraseña

    //variable para registrar los datos en la base de datos//
    $query = "INSERT INTO usuarios(nombre_Completo, Correo, Usuario, contrasena) 
              VALUES('$nombre_completo', '$correo', '$usuario', '$Contrasena')";

    exit();
    //______________________________________________________________________ //

    $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE CORREO ='$correo' ");

    if (mysqli_num_rows($verificar_correo) > 0) {
        echo'
            <script> 
                alert("Este correo ya esta registrado, intenta con otro diferente");
                window.location = "../login.php";
             </script> 
        ';
        exit();
    }

    //______________________________________________________________________ //

    $verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE USUARIO ='$usuario' ");

    if (mysqli_num_rows($verificar_usuario) > 0) {
        echo'
            <script> 
                alert("Este usuario ya esta registrado, intenta con otro diferente");
                window.location = "../login.php";
             </script> 
        ';
        exit();
    }

    //______________________________________________________________________ //

    //variable para ejecutar $query //
    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo'
            <script> 
                alert("Usuario almacenado correctamente");
                window.location = "../login.php";
            </script>
        ';      

    }

    else{
        echo'
            <script> 
                alert("Inténtalo de nuevo usuario no almacenado");
                window.location = "../login.php";
            </script>
        ';      
    }

    mysqli_close($conexion);
?>
