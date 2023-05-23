<?php
include("conexion.php");
$con=conectar();
$cli_id=$con->real_escape_string($_POST['cli_id']);
$Emp_name=$con->real_escape_string($_POST['Emp_name']);
$F_Name=$con->real_escape_string($_POST['F_Name']);
$L_Name=$con->real_escape_string($_POST['L_Name']);
$B_Date=$con->real_escape_string($_POST['B_Date']);
$email=$con->real_escape_string($_POST['email']);
$Phone_N=$con->real_escape_string($_POST['Phone_N']);
$Country=$con->real_escape_string($_POST['Country']);

$sql="INSERT INTO clientes VALUES('$cli_id','$Emp_name','$F_Name','$L_Name','$B_Date','$email','$Phone_N','$Country')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: clientes.php");
    
}else {
}
?>