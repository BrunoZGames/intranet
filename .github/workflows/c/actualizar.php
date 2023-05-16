<?php 
    include("conexion.php");
    $con=conectar();
    $id=$_GET['cli_id'];
    $sql="SELECT * FROM clientes WHERE cli_id='$id'";
    $query=mysqli_query($con,$sql);
    $row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Actualizar</title>
        <link rel="stylesheet" href="../intrastyle.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    </head>
    <body>
    <nav class="navbar">
        <ul>
            <li><a href="..\index.php">Home</a></li>
            <li><a href="..\c\clientes.php" class="active">Clientes</a></li>
            <li><a href="..\p\pedidos.php">Pedidos</a></li>
            <li><a href="..\s\stock.php">Stock</a></li>
            <a href="..\login.php"><li style="float:right;"><img class="logo" src="..\img\AXIOM.png"></li></a>
        </ul>
    </nav>
    <br>

                <div class="container mt-5">
                    <form action="update.php" method="POST">
                    
                                <input type="hidden" name="cli_id" value="<?php echo $row['cli_id']?>">
                                <input type="text" class="form-control mb-3" name="Emp_name" placeholder="Emp_name" value="<?php echo $row['Emp_name']  ?>">
                                <input type="text" class="form-control mb-3" name="F_Name" placeholder="F_Name" value="<?php echo $row['F_Name']  ?>">
                                <input type="text" class="form-control mb-3" name="L_Name" placeholder="L_Name" value="<?php echo $row['L_Name']  ?>">
                                <input type="text" class="form-control mb-3" name="B_Date" placeholder="B_Date" value="<?php echo $row['B_Date']  ?>">
                                <input type="text" class="form-control mb-3" name="email" placeholder="email" value="<?php echo $row['email']  ?>">
                                <input type="text" class="form-control mb-3" name="Phone_N" placeholder="Phone_N" value="<?php echo $row['Phone_N']  ?>">
                                <input type="text" class="form-control mb-3" name="Country" placeholder="Country" value="<?php echo $row['Country']  ?>">                           
                                <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>