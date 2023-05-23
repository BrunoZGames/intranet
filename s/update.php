<?php

include("conexion.php");
$con=conectar();
$Prod_ID=$con->real_escape_string($_POST['Prod_ID']);
$Prod_Name=$con->real_escape_string($_POST['Prod_Name']);
$Stock_num=$con->real_escape_string($_POST['Stock_num']);
$price=$con->real_escape_string($_POST['price']);
$out_stock=$con->real_escape_string($_POST['out_stock']);
$out_prod=$con->real_escape_string($_POST['out_prod']);

$sql="UPDATE stock SET Prod_Name='$Prod_Name',Stock_num='$Stock_num',price='$price',out_stock='$out_stock',out_prod='$out_prod' WHERE Prod_ID='$Prod_ID'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: stock.php");
    }
?>