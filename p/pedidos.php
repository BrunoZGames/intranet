<?php 
    include "conexion.php";
    $con=conectar();
    $sql="SELECT * FROM pedidos p JOIN stock s ON p.Prod_ID = s.Prod_ID JOIN clientes c ON p.cli_id = c.cli_id";
    $query=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> PAGINA ALUMNO</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <<link rel="stylesheet" href="../intrastyle.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    </head>
    <body>
    <nav class="navbar">
        <ul>
            <li><a href="..\index.php">Home</a></li>
            <li><a href="..\c\clientes.php" >Clientes</a></li>
            <li><a href="..\p\pedidos.php" class="active">Pedidos</a></li>
            <li><a href="..\s\stock.php">Stock</a></li>
            <a href="..\login.php"><li style="float:right;"><img class="logo" src="..\img\AXIOM.png"></li></a>
        </ul>
    </nav>
            <div class="container mt-5">
                    <div class="row"> 
                        <div class="col-md-3">
                            <h1>Ingrese datos</h1>
                                <form action="insertar.php" method="POST">
                                <input type="text" class="form-control mb-3" name="Ped_ID" placeholder="ID Pedido">
                               
                                <select name="cli_id" placeholder="Cliente" class="form-control mb-3">
                                    <option value="0">Cliente</option>
                                    <?php       
                                            $sql1="SELECT * FROM clientes";
                                            $query1=mysqli_query($con,$sql1);
                                            while($line=mysqli_fetch_array($query1)){
                                        ?>
                                    <?php echo "<option value=" . $line['cli_id'] . ">" . $line['F_Name'] . "</option>" ?>
                                    <?php } ?>
                                </select>
                                <select name="Prod_ID" placeholder="Cliente" class="form-control mb-3">
                                    <option value="0">Nombre Producto</option>
                                    <?php       
                                            $sql2="SELECT * FROM stock";
                                            $query2=mysqli_query($con,$sql2);
                                            while($lin=mysqli_fetch_array($query2)){
                                        ?>
                                    <?php echo "<option value=" . $lin['Prod_ID'] . ">" . $lin['Prod_Name'] . "</option>" ?>
                                    <?php } ?>
                                </select>
                                
                                <input type="text" class="form-control mb-3" name="Qtd" placeholder="Cantidad">
                                <select name="rdy" placeholder="Pedido Preparado?" class="form-control mb-3">
                                    <option value="0">Pedido Preparado?</option>
                                    <option value="0">No</option>
                                    <option value="1">Sí</option>
                                </select>
                                <select name="delive" placeholder="Pedido Entregado?" class="form-control mb-3">
                                    <option value="0">Pedido Entregado?</option>
                                    <option value="0">No</option>
                                    <option value="1">Sí</option>
                                </select>
                                <input type="text" class="form-control mb-3" name="Delive_addr" placeholder="Dirección de envio">
                                <input type="submit" class="btn btn-primary">
                                </form>
                        </div>
                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>ID Pedido</th>
                                        <th>Cliente</th>
                                        <th>DNI</th>
                                        <th>Producto</th>
                                        <th>Cantidad</th>
                                        <th>Preparado?</th>
                                        <th>Entregado?</th>
                                        <th>Dirección</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php echo $row['Ped_ID']?></th>
                                                <th><?php echo $row['F_Name']?></th>
                                                <th><?php echo $row['cli_id']?></th>
                                                <th><?php echo $row['Prod_Name']?></th>
                                                <th><?php echo $row['Qtd']?></th>
                                                <th><?php if($row['rdy'] == 1){ echo '<i class="fa fa-check"></i>';}else{echo '<i class="fa fa-times"></i>';}?></th>
                                                <th><?php if($row['delive'] == 1){ echo '<i class="fa fa-check"></i>';}else{echo '<i class="fa fa-times"></i>';}?></th>
                                                <th><?php echo $row['Delive_addr']?></th>      
                                                <th><a href="../p/actualizar.php?Ped_ID=<?php echo $row['Ped_ID'] ?>" class="link-dark fa-solid fa-pen-to-square fs-5 me-3"></a></th>
                                                <th><a href="delete.php?Ped_ID=<?php echo $row['Ped_ID'] ?>" class="link-danger fa-solid fa-trash fs-5"></a></th>                                        
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