<?php
include("conexion.php");
$con=conectar();
$Ped_id=$con->real_escape_string($_POST['Ped_ID']);
$cli_id=$con->real_escape_string($_POST['cli_id']);
$Prod_ID=$con->real_escape_string($_POST['Prod_ID']);
$Qtd=$con->real_escape_string($_POST['Qtd']);
$rdy=$con->real_escape_string($_POST['rdy']);
$delive=$con->real_escape_string($_POST['delive']);
$Delive_addr=$con->real_escape_string($_POST['Delive_addr']);
$sql="INSERT INTO pedidos VALUES('$Ped_id','$cli_id','$Prod_ID','$Qtd','$rdy','$delive','$Delive_addr')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: pedidos.php");
}else {
}
?>