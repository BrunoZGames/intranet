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

$sql="UPDATE clientes SET Emp_name='$Emp_name',F_Name='$F_Name',L_Name='$L_Name',B_Date='$B_Date',email='$email',Phone_N='$Phone_N',Country='$Country' WHERE cli_id='$cli_id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: clientes.php");
    }
?>