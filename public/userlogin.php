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

/*CONSULTA PARA VALIDAR EL USUARIO Y CONTRASEÑA*/
$consulta = "SELECT * FROM usuarios WHERE nombreUsuario = '$usuario' AND contraseña = '$contraseña';";
$ejecutarconsulta = mysqli_query($conn,$consulta);
$verfilas = mysqli_num_rows($ejecutarconsulta);


/*SWITCH QUE VALIDA SI EL USUARIO Y CONTRASEÑA SON CORRECTOS CON LOS REGISTROS DE LA BASE DE DATOS*/
switch(true){
    case ($verfilas >= 1):
        echo "<script> window.location.href = 'index.html';</script>";
        break;

    default:
        mysqli_query($conn,$consulta3);
        $message = "El usuario o contraseña ingresados son inválidos, inténtelo de nuevo";
        echo "<script type='text/javascript'>alert('$message');</script>";
        echo "<script> window.location.href = 'login.php';</script>";
        break;
}

$conn->close();

?>