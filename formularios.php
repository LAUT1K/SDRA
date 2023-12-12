<?php
include('conectar.php');															// importa el script para conectar

if (isset($_POST['guardar'])) {														// Datos enviados del formulario
  $calle = $_POST['calle'];
  $asfaltada = $_POST['asfaltada'];
  $estado = $_POST['estado'];
  $encargado = $_POST['encargado'];
  $query = "INSERT INTO datos(calle, asfaltada, estado, encargado) VALUES ('$calle', '$asfaltada', '$estado', '$encargado')";	// Alta de datos con SQL
  $result = mysqli_query($conn, $query);											
  if(!$result) {
    die("No se pudo insertar datos (Query Failed!)");								// Muestra el Error si no se pudo insertar los datos
  }

  $_SESSION['mensaje'] = 'Calle guardada';										// Muestra el mensaje después del alta de registro
  $_SESSION['mensaje.C'] = 'success';
  header('Location: index.php');													// Redirección al archivo index.php

}
?>