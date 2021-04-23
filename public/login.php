<?php
$conexion = mysqli_connect('localhost','root','LASE2711del2001','bd_stress') or die ("Error al conectar a la base de datos");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/form.css">
    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon">
    <title>Login & Register</title>
</head>
<body class="body">
    
    <div class= "formlr">
        <a href="index.html">
            <img src="./assets/images/logo/LATAM_blanco.png" class="logoform">
        </a>
        <div class="form-box">
            <div class="btn-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()">Login</button>
                <button type="button" class="toggle-btn" onclick="register()">Sign Up</button>
            </div>
            <form id="login" class="input" action="userlogin.php" method="post">
                <input type="text" class="entrada" name="User" placeholder="Usuario" required>
                <input type="text" class="entrada" name="Password" placeholder="Contraseña" required>
                <input type="checkbox" class="check"><span class="cspan">Recordar contraseña</span>
                <button type="submit" class="submit-btn">Iniciar</button>
            </form>
            <form id="register" class="input" action="useregister.php" method="post">
                <input type="text" class="entrada" name="Email" placeholder="Correo" required>
                <input type="text" class="entrada" name="User" placeholder="Usuario" required>
                <input type="password" class="entrada" name="Password" placeholder="Contraseña" required>
                <input type="cpassword" class="entrada" name="Cpassword" placeholder="Confirmar Contraseña" required>
                <input type="checkbox" class="check"><span class="cspan">Acepto los terminos y condiciones</span>
                <button type="submit" class="submit-btn">Registrarse</button>
            </form>
        </div>
    </div>
    <script src="js/form.js"></script>
</body>
</html>