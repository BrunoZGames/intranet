<?php

include("conexion.php");
$con=conectar();

$Prod_ID=$_GET['Prod_ID'];

$sql="DELETE FROM stock WHERE Prod_ID='$Prod_ID'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: stock.php");
    }
?>
