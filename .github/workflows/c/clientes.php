<?php 
    include "conexion.php";
    $con=conectar();
    $sql="SELECT * FROM clientes";
    $query=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>PAGINA CLIENTES</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../intrastyle.css">
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
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingrese datos</h1>
                                <form action="insertar.php" method="POST">
                                <input type="text" class="form-control mb-3" name="cli_id" placeholder="DNI">
                                <input type="text" class="form-control mb-3" name="Emp_name" placeholder="Empresa">
                                <input type="text" class="form-control mb-3" name="F_Name" placeholder="Nombre">
                                <input type="text" class="form-control mb-3" name="L_Name" placeholder="Apellido">
                                <input type="text" class="form-control mb-3" name="B_Date" placeholder="Fecha de Nacimiento">
                                <input type="text" class="form-control mb-3" name="email" placeholder="Email">
                                <input type="text" class="form-control mb-3" name="Phone_N" placeholder="Telefono">
                                <input type="text" class="form-control mb-3" name="Country" placeholder="País">   
                                <input type="submit" class="btn btn-primary">
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>DNI</th>
                                        <th>Empresa</th>
                                        <th>Nombre</th>
                                        <th>Apellido</th>
                                        <th>Fecha de Nacimiento</th>
                                        <th>Email</th>
                                        <th>Telefono</th>
                                        <th>País</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php echo $row['cli_id']?></th>
                                                <th><?php echo $row['Emp_name']?></th>
                                                <th><?php echo $row['F_Name']?></th>
                                                <th><?php echo $row['L_Name']?></th>
                                                <th><?php echo $row['B_Date']?></th>
                                                <th><?php echo $row['email']?></th>
                                                <th><?php echo $row['Phone_N']?></th>
                                                <th><?php echo $row['Country']?></th>        
                                                <th><a href="actualizar.php?cli_id=<?php echo $row['cli_id'] ?>" class="link-dark fa-solid fa-pen-to-square fs-5 me-3"></a></th>
                                                <th><a href="delete.php?cli_id=<?php echo $row['cli_id'] ?>" class="link-danger fa-solid fa-trash fs-5"></a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>