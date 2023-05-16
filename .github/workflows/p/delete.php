<?php

include("conexion.php");
$con=conectar();

$Ped_id=$_GET['Ped_ID'];

$sql="DELETE FROM pedidos WHERE Ped_ID='$Ped_id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: pedidos.php");
    }
?>
