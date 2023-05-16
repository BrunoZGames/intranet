<?php

include("conexion.php");
$con=conectar();
$Ped_id=$_POST['Ped_ID'];
$cli_id=$_POST['cli_id'];
$Prod_ID=$_POST['Prod_ID'];
$Qtd=$_POST['Qtd'];
$rdy=$_POST['rdy'];
$delive=$_POST['delive'];
$Delive_addr=$_POST['Delive_addr'];
$sql="UPDATE pedidos SET cli_id='$cli_id', Prod_ID='$Prod_ID',Qtd='$Qtd',rdy='$rdy',delive='$delive',Delive_addr='$Delive_addr' WHERE Ped_ID='$Ped_id'";

$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: pedidos.php");
    }
?>