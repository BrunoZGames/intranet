<?php
include("conexion.php");
$con=conectar();
$cli_id=$_POST['cli_id'];
$Emp_name=$_POST['Emp_name'];
$F_Name=$_POST['F_Name'];
$L_Name=$_POST['L_Name'];
$B_Date=$_POST['B_Date'];
$email=$_POST['email'];
$Phone_N=$_POST['Phone_N'];
$Country=$_POST['Country'];

$sql="INSERT INTO clientes VALUES('$cli_id','$Emp_name','$F_Name','$L_Name','$B_Date','$email','$Phone_N','$Country')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: clientes.php");
    
}else {
}
?>