<?php
    session_start();
    if(!isset($_SESSION['usuario'])){
        echo'
            <script>
                alert("Por favor debe iniciar sesión");
                window.location = "login.php";
            </script>
        ';
        
        session_destroy();
        die();
    }
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <h1 class="titulo"> Bienvenido a Serlans <span> - Menu principal</span></h1>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/styles2.css"/>
    </head>

    <body>
    <center>
    <div class="panel">
        <form class="panel" action="buscar.php" method="POST">
            <input class="input" type="text" name="buscar" id="">
            <input class="button" type="submit" value="Buscar">
            <button class="button" type= "submit"><a href="nuevo.php" input type="submit">Anadir Nuevo</a></button>           
            <button class="button"type="submit" ><a class="a" href="php/cerrar_sesion.php" input type="submit"> Cerrar Sesión </a> </button>

        </form>
    </div>
    
    <div>
        <table class="table1" border="1" >
            <tr>
                <td>ID</td>
                <td>Nombre del Cliente</td>
                <td>Telefono</td>
                <td>Marca de moto</td>
                <td>Cilindraje</td>
                <td>Placa</td>
                <td>WhatsApp</td>
                <td>Servicio de diagnostico</td>
                <td>Valor del Servicio</td>
                <td>Total</td>
                <td>Opciones</td>
            </tr>
            <?php
                $cnx = mysqli_connect("localhost","root","", "login_register_db");
                $sql = "SELECT id,nombre_del_cliente, telefono, marca_de_moto, cilindraje, placa, whatsapp, servicio_de_diagnostico, valor_del_servicio, total FROM usuarios02 order by id desc";
                $rta = mysqli_query($cnx, $sql);
                while ($mostrar = mysqli_fetch_row($rta)) {
            ?>
            <tr>
                <td><?php echo $mostrar['0']?></td>
                <td><?php echo $mostrar['1']?></td>
                <td><?php echo $mostrar['2']?></td>
                <td><?php echo $mostrar['3']?></td>
                <td><?php echo $mostrar['4']?></td>
                <td><?php echo $mostrar['5']?></td>
                <td><?php echo $mostrar['6']?></td>
                <td><?php echo $mostrar['7']?></td>
                <td><?php echo $mostrar['8']?></td>
                <td><?php echo $mostrar['9']?></td>
                <td>                
                    <button class="button" type="submit"><a href="editar.php?
                        id= <?php echo $mostrar['0']?>&
                        nombre_del_cliente=<?php echo $mostrar['1']?>&
                        telefono=<?php echo $mostrar['2']?>&
                        marca_de_moto=<?php echo $mostrar['3']?>&
                        cilindraje=<?php echo $mostrar['4']?>&
                        placa=<?php echo $mostrar['5']?>&
                        whatsapp=<?php echo $mostrar['6']?>&
                        servicio_de_diagnostico=<?php echo $mostrar['7']?>&
                        valor_del_servicio=<?php echo $mostrar['8']?>&
                        total=<?php echo $mostrar['9']?>
                    
                        ">Editar</a></button>
                    <button class="button" type="submit"><a href="sp_eliminar.php? id= <?php echo $mostrar['0']?>">Eliminar</a> </button>
                  
                </td>
            </tr>
            <?php              
                 }
            ?>
            
        </table>
    </div>
    <center>
</body>
   <!-- <body>
        
        <main>  
            <div class="container">                
                <form action="php/registro_cliente_be.php" method="POST">
                    <div class="subcontainer-campo"> 
                        <div class="campo">
                        <svg class="iconos" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" width="24" height="24" stroke-width="2"> <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path> <path d="M12 10m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path> <path d="M6.168 18.849a4 4 0 0 1 3.832 -2.849h4a4 4 0 0 1 3.834 2.855"></path> </svg>  
                            <label for="cliente">Nombre del Cliente:</label>
                            <input class= "input" type="text" id="cliente" name="cliente" required>
                        </div>                        
                        <div class="campo">
                        <svg class="iconos" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" width="24" height="24" stroke-width="2"> <path d="M18 4a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-5l-5 3v-3h-2a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12z"></path> <path d="M9.5 9h.01"></path> <path d="M14.5 9h.01"></path> <path d="M9.5 13a3.5 3.5 0 0 0 5 0"></path> </svg> 
                            <label for="telefono">Teléfono:</label>
                            <input class= "input" type="text" id="telefono" name="telefono" required>
                        </div>
                        <div class="campo">
                        <svg class="iconos" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" width="24" height="24" stroke-width="2"> <path d="M5 16m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path> <path d="M19 16m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path> <path d="M7.5 14h5l4 -4h-10.5m1.5 4l4 -4"></path> <path d="M13 6h2l1.5 3l2 4"></path> </svg> 
                            <label for="moto">Marca de Moto:</label>
                            <input class= "input" type="text" id="moto" name="moto" required>
                        </div>   
                        <div class="campo">
                        <svg class="iconos" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" width="24" height="24" stroke-width="2"> <path d="M18 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path> <path d="M5 16v1a2 2 0 0 0 4 0v-5h-3a3 3 0 0 0 -3 3v1h10a6 6 0 0 1 5 -4v-5a2 2 0 0 0 -2 -2h-1"></path> <path d="M6 9l3 0"></path> </svg> 
                        <label for="cilindraje">Cilindraje:</label>
                        <input class= "input" type="text" id="cilindraje" name="cilindraje">
                        </div>
                        <div class="campo">
                        <svg class="iconos"xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" width="24" height="24" stroke-width="2"> <path d="M3 19v-14a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v14a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z"></path> <path d="M11 15h2"></path> <path d="M9 12h6"></path> <path d="M10 9h4"></path> </svg> 
                            <label for="placa">Placa:</label>
                            <input class= "input" type="text" id="placa" name="placa">
                        </div>
                        <div class="campo">  
                            <svg  class="iconos" xmlns="http://www.w3.org/2000/svg"   width="24"   height="24"   viewBox="0 0 24 24"   fill="none"   stroke="currentColor"   stroke-width="2"   stroke-linecap="round"   stroke-linejoin="round" > <path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9" /> <path d="M9 10a.5 .5 0 0 0 1 0v-1a.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a.5 .5 0 0 0 0 -1h-1a.5 .5 0 0 0 0 1" /></svg>  
                            <label for="whatsapp">WhatsApp:</label>
                            <input class= "input" type="whatsapp" id="whatsapp" name="whatsapp">
                        </div>
                        <div class="campo">  
                            <svg  class="iconos" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" width="24" height="24" stroke-width="2"> <path d="M10.325 19.683a1.723 1.723 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572a1.67 1.67 0 0 1 1.106 .831"></path> <path d="M14.89 11.195a3.001 3.001 0 1 0 -4.457 3.364"></path> <path d="M17.8 20.817l-2.172 1.138a.392 .392 0 0 1 -.568 -.41l.415 -2.411l-1.757 -1.707a.389 .389 0 0 1 .217 -.665l2.428 -.352l1.086 -2.193a.392 .392 0 0 1 .702 0l1.086 2.193l2.428 .352a.39 .39 0 0 1 .217 .665l-1.757 1.707l.414 2.41a.39 .39 0 0 1 -.567 .411l-2.172 -1.138z"></path> </svg>   
                            <label for="servicio_de_diagnostico">Servicio de diagnostico:</label>
                            <input class= "input" type="servicio_de_diagnostico" id="servicio_de_diagnostico" name="servicio_de_diagnostico">
                        </div>
                        <div class="campo">  
                            <svg  class="iconos" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" width="24" height="24" stroke-width="2"> <path d="M20.87 10.48a9 9 0 1 0 -7.876 10.465"></path> <path d="M9 10h.01"></path> <path d="M15 10h.01"></path> <path d="M9.5 15c.658 .64 1.56 1 2.5 1c.357 0 .709 -.052 1.043 -.151"></path> <path d="M21 15h-2.5a1.5 1.5 0 0 0 0 3h1a1.5 1.5 0 0 1 0 3h-2.5"></path> <path d="M19 21v1m0 -8v1"></path> </svg>   
                            <label for="valor_del_servicio">Valor del Servicio:</label>
                            <input class= "input" type="valor_del_servicio" id="valor_del_servicio" name="valor_del_servicio">
                        </div>
                        <div class="campo">  
                            <svg  class="iconos" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" width="24" height="24" stroke-width="2"> <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path> <path d="M13.867 9.75c-.246 -.48 -.708 -.769 -1.2 -.75h-1.334c-.736 0 -1.333 .67 -1.333 1.5c0 .827 .597 1.499 1.333 1.499h1.334c.736 0 1.333 .671 1.333 1.5c0 .828 -.597 1.499 -1.333 1.499h-1.334c-.492 .019 -.954 -.27 -1.2 -.75"></path> <path d="M12 7v2"></path> <path d="M12 15v2"></path> </svg>   
                            <label for="total">Total:</label>
                            <input class= "total" type="total" id="total" name="total">
                        </div>
                    </div>
                    <div class= "button" class="input"  action="php/registro_cliente_be.php" method="POST"> 
                        <input type="submit" value ="Buscar" name="limpiardatos">
                        <input type="submit" value="Registar" name="registardatos">
                        <input type="submit" value="Modificar" name="modificardatos">
                        <input type="submit" value="Eliminar" name="eliminardatos">
                                  
                    </div>   
                    
                    <div> 
            <table class="" action="php/registro_cliente_be.php" method="POST">
                <thead>
                    <tr>
                        <th><label>Nombre del Cliente</label></th>
                        <th><label>Teléfono</label></th>
                        <th><label>Marca de Moto</label></th>
                        <th><label>Cilindraje</label></th>
                        <th><label>Placa</label></th>
                        <th><label>WhatsApp</label></th>
                        <th><label>Servicio de diagnostico</label></th>
                        <th><label>Valor del Servicio</label></th>
                        <th><label>Total</label></th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="">
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody> <!-- Se Puede agregar más filas <tr> con datos aquí -->                            
            </table>    
        </div> 
                </form>   
                     
            </div>
            
        </main>  
        
    </body> -->
</html>