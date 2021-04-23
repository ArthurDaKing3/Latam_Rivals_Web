<?php
$servername= "localhost";
$username = "root";
$password = "LASE2711del2001";
$dbname = "bd_latam";

$correo = $_POST['Email'];
$usuario = $_POST['User'];
$contraseña = $_POST['Password'];
$ccontraseña = $_POST['Cpassword'];

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
    die("Connection failed: " .$conn->connect_error);
}

/*CONSULTA PARA COMPROBAR SI EL CORREO INGRESADO YA EXISTE*/
$consulta = "SELECT * FROM usuarios WHERE correo = '$correo';";
$ejecutarconsulta = mysqli_query($conn,$consulta);
$verfilas = mysqli_num_rows($ejecutarconsulta);

/*CONSULTA PARA COMPROBAR SI EL NOMBRE DE USUARIO INGRESADO YA EXISTE*/
$consulta2 = "SELECT * FROM usuarios WHERE nombreUsuario = '$usuario';";
$ejecutarconsulta2 = mysqli_query($conn,$consulta2);
$verfilas2 = mysqli_num_rows($ejecutarconsulta2);

/*CONSULTA PARA REGISTRAR AL USUARIO EN LA BASE DE DATOS*/
$consulta3 = "INSERT INTO usuarios (correo, nombreUsuario, contraseña, idTipoUsuario) VALUES ('$correo', '$usuario', '$contraseña', 2);";

/*SWITCH QUE CONTROLA LOS DATOS ANTES DE SER REGISTRADOS EN LA BASE DE DATOS*/
switch(true){
    case ($verfilas >= 1):
        $message = "El correo ingresado ya esta registrado";
        echo "<script type='text/javascript'>alert('$message');</script>";
        echo "<script> window.location.href = 'login.php';</script>";
        break;
    
    case ($verfilas2 >= 1):
        $message = "El nombre de usuario ya esta registrado";
        echo "<script type='text/javascript'>alert('$message');</script>";
        echo "<script> window.location.href = 'login.php';</script>";
        break;

    case ($contraseña != $ccontraseña):
        $message = "Las contraseñas ingresadas no coinciden";
        echo "<script type='text/javascript'>alert('$message');</script>";
        echo "<script> window.location.href = 'login.php';</script>";
        break;

    default:
        mysqli_query($conn,$consulta3);
        $message = "Registro exitoso";
        echo "<script type='text/javascript'>alert('$message');</script>";
        echo "<script> window.location.href = 'login.php';</script>";
        break;
}

$conn->close();

?>