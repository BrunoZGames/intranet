<?php
include 'config.php';

session_start();


if (isset($_POST['submit'])) {
    $usuario = $_POST['usuario'];
    $pass = hash("sha256",$_POST['pass']);

    // Consultar la base de datos para verificar las credenciales de usuario
    $sql = "SELECT * FROM users WHERE usuario = '$usuario' AND psw = '$pass'";
    $resultado = $conn->query($sql);

    if ($resultado->rowCount() == 1) {
        // Iniciar la sesión de usuario
        $_SESSION['nombre_usuario'] = $usuario;
            header('Location: ./index.php');
    } else {
        // Mostrar un mensaje de error
        echo "Nombre de usuario o contraseña incorrectos";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>INTRA / AXIOM</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="total">
        <div class="login">
            <img src="./img/AXIOM.png">
            <div class="case">
                <h1>< Login ></h1>
                <form action="" method="post">
                <p>Usuario: <input type="text" name="usuario" maxlength="15" value="<?php echo isset($_POST['usuario']) ? $_POST['usuario'] : ''; ?>" required></p>
                <p>Contraseña: <input type="password" name="pass" minlength="6" value="<?php echo isset($_POST['pass']) ? $_POST['pass'] : ''; ?>" required></p>
                    <button name="submit" class="boton">
                        Enviar
                    </button>
                    <button class="boton" input type="reset">
                        Borrar
                    </button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
