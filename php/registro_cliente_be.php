<?php

include 'conexion_be.php';

// Retrieve the data from the POST request
$cliente = $_POST['cliente'];
$telefono = $_POST['telefono'];
$moto = $_POST['moto'];
$cilindraje = $_POST['cilindraje'];
$placa = $_POST['placa'];
$whatsapp = $_POST['whatsapp'];
$servicio_de_diagnostico = $_POST['servicio_de_diagnostico'];
$valor_del_servicio = $_POST['valor_del_servicio'];
$total = $_POST['total'];



// If the 'cliente' already exists, show an error
if ($count > 0) {
    echo "Error: El cliente con este nombre ya existe.";
} else {
    // Prepare the SQL query using placeholders for the values
    $query = "INSERT INTO usuarios02 (cliente, telefono, moto, cilindraje, placa, whatsapp, servicio_de_diagnostico, valor_del_servicio, total) 
              VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

    // Initialize the prepared statement
    $stmt = mysqli_prepare($conexion, $query);

    // Check if the statement was prepared successfully
    if ($stmt === false) {
        die('Error preparing the query: ' . mysqli_error($conexion));
    }

    // Bind the variables to the prepared statement
    mysqli_stmt_bind_param($stmt, 'sssssssss', $cliente, $telefono, $moto, $cilindraje, $placa, $whatsapp, $servicio_de_diagnostico, $valor_del_servicio, $total);

    // Execute the prepared statement
    $ejecutar = mysqli_stmt_execute($stmt);

    // Check if the query was executed successfully
    if ($ejecutar) {
        echo "¡Datos insertados con éxito!";
    } else {
        echo "Error: " . mysqli_error($conexion);
    }

    // Close the statement and connection
    mysqli_stmt_close($stmt);
}

// Close the connection
mysqli_close($conexion);
?>




    

