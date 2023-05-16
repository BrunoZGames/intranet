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
$sql="INSERT INTO pedidos VALUES('$Ped_id','$cli_id','$Prod_ID','$Qtd','$rdy','$delive','$Delive_addr')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: pedidos.php");
}else {
}
?>