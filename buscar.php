<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title><h1 class="titulo"> Bienvenido a Serlans <span>- Buscar Clientes </span></h1>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/styles2.css"/>
        </head>
</head>
<body>
    <center>
    <?php
    $buscar = $_POST['buscar'] ?? '';
    ?>
    <div>
        <form action="buscar.php" method="POST">
            <input type="text" name="buscar" id="" VALUE="<?=$buscar?>">
            <input type="submit" value="Buscar">
            <button type= "submit"><a href="nuevo.php">Añadir Nuevo</a></button>
        </form>
    </div>
    
    <div>
        <table class="table4" border="1" >
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
                
                $cnx = mysqli_connect("localhost", "root","","login_register_db");
                $sql = "SELECT id,nombre_del_cliente, telefono, marca_de_moto, cilindraje, placa, whatsapp, servicio_de_diagnostico, valor_del_servicio, total FROM usuarios02
                WHERE nombre_del_cliente LIKE '$buscar' '%' OR whatsapp LIKE '$buscar' '%'  order by id desc";
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
                    <a href="editar.php?
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
                    
                    ">Editar</a>
                    <a href="sp_eliminar.php? id= <?php echo $mostrar['0']?>">Eliminar</a>
                </td>
            </tr>
            <?php              
                 }
            ?>
            
        </table>
    </div>
</center>
</body>
</html>