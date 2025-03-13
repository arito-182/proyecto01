<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <h1 class="titulo"> Bienvenido a Serlans <span>- Editar Datos Clientes </span></h1>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/styles2.css"/>
        </head>
<body>
    <center>
<?php
    $id = $_GET['id'];
    $nombre_del_cliente = $_GET['nombre_del_cliente'];
    $telefono = $_GET['telefono'];
    $marca_de_moto = $_GET['marca_de_moto'];
    $cilindraje	= $_GET['cilindraje'];
    $placa = $_GET['placa'];
    $whatsapp = $_GET['whatsapp'];
    $servicio_de_diagnostico = $_GET['servicio_de_diagnostico'];
    $valor_del_servicio	= $_GET['valor_del_servicio'];
    $total= $_GET['total'];
?>    
    <div>
        <form action="sp_editar.php" method="POST">
            <table class="table3" border="1">
            <caption class="caption"> </caption>
                <tr>
                    <td><input type="text" name="id" style="visibility: hidden;" value="<?=$id?> id=""></td>

                </tr>
                <tr>  
                    <td>Nombre del Cliente:</td>
                    <td><input type="text" name="nombre_del_cliente" id="" value="<?=$nombre_del_cliente?>"></td>                 
                </tr>
                <tr> 
                    <td>Telefono:</td>   
                    <td><input type="text" name="telefono" id="" value="<?=$telefono?>"></td>               
                </tr>
                <tr> 
                    <td>Marca de moto:</td>  
                    <td><input type="text" name="marca_de_moto" id="" value="<?=$marca_de_moto?>"></td>                
                </tr>
                <tr>
                    <td>Cilindraje:</td>  
                    <td><input type="text" name="cilindraje" id="" value="<?=$cilindraje?>"></td>                 
                </tr>
                <tr>   
                    <td>Placa:</td>  
                    <td><input type="text" name="placa" id="" value="<?=$placa?>"></td>              
                </tr>
                <tr>  
                    <td>WhatsApp:</td>  
                    <td><input type="text" name="whatsapp" id="" value="<?=$whatsapp?>"></td>               
                </tr>
                <tr> 
                    <td>Servicio de diagnostico:</td>  
                    <td><input type="text" name="servicio_de_diagnostico" id="" value="<?=$servicio_de_diagnostico?>"></td>                
                </tr>
                <tr>    
                    <td>Valor del Servicio:</td>  
                    <td><input type="text" name="valor_del_servicio" id="" value="<?=$valor_del_servicio?>"></td>             
                </tr>
                <tr>   
                    <td>Total:</td>   
                    <td><input type="text" name="total" id="" value="<?=$total?>"></td>             
                </tr>
                
            </table>   
            
            <div class= "panel">  
            <input class= "button" type="submit" value="Actualizar">
            <button class= "button" type= "submit"><a href="bienvenido.php">Cancelar</a></button></td>
            </div>
             
                    

                
        </form>
    </div>
</center>
</body>
</html>