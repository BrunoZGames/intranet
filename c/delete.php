<?php

include("conexion.php");
$con=conectar();

$cli_id=$_GET['cli_id'];

$sql="DELETE FROM clientes  WHERE cli_id='$cli_id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: clientes.php");
    }
?>
