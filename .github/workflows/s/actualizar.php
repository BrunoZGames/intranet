<?php 
    include("conexion.php");
    $con=conectar();
    $Prod_ID=$_GET['Prod_ID'];
    $sql="SELECT * FROM stock WHERE Prod_ID='$Prod_ID'";
    $query=mysqli_query($con,$sql);
    $row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
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
            <li><a href="..\c\clientes.php" >Clientes</a></li>
            <li><a href="..\p\pedidos.php">Pedidos</a></li>
            <li><a href="..\s\stock.php" class="active">Stock</a></li>
            <a href="..\login.php"><li style="float:right;"><img class="logo" src="..\img\AXIOM.png"></li></a>
        </ul>
    </nav>
    <br>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                    
                                <input type="hidden" class="form-control mb-3" name="Prod_ID" placeholder="ID Producto" value="<?php echo $row['Prod_ID']?>">
                                <input type="text" class="form-control mb-3" name="Prod_Name" placeholder="Producto" value="<?php echo $row['Prod_Name']?>">
                                <input type="text" class="form-control mb-3" name="Stock_num" placeholder="Stock" value="<?php echo $row['Stock_num']?>">
                                <input type="text" class="form-control mb-3" name="price" placeholder="Precio" value="<?php echo $row['price']?>">
                                <select name="out_stock" placeholder="Fuera de Stock?" class="form-control mb-3">
                                    <option value="<?php echo $row['out_stock']?>">Fuera de Stock?</option>
                                    <option value="0">No</option>
                                    <option value="1">Sí</option>
                                </select>
                                <select name="out_prod" placeholder="Fuera de Producción?" class="form-control mb-3">
                                    <option value="<?php echo $row['out_prod']?>">Fuera de Producción?</option>
                                    <option value="0">No</option>
                                    <option value="1">Sí</option>
                                </select>                         
                                <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>