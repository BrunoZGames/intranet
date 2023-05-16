<?php
include("conexion.php");
$con=conectar();
$Prod_ID=$_POST['Prod_ID'];
$Prod_Name=$_POST['Prod_Name'];
$Stock_num=$_POST['Stock_num'];
$price=$_POST['price'];
$out_stock=$_POST['out_stock'];
$out_prod=$_POST['out_prod'];

$sql="INSERT INTO stock VALUES('$Prod_ID','$Prod_Name','$Stock_num','$price','$out_stock','$out_prod')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: stock.php");
    
}else {
}
?>