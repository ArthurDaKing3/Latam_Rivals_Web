<?php
$servername= "localhost";
$username = "root";
$password = "12345";
$dbname = "help_us";

$Name = $_POST['name'];
$Email = $_POST['email'];
$Comment = $_POST['comment'];

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
    die("Connection failed: " .$conn->connect_error);
}

$sql = "INSERT INTO suggest (name, email, comment) VALUES ('$Name', '$Email', '$Comment')";

if($conn->query($sql)=== TRUE){
    echo "Mensaje enviado";
}else{
    echo "Error: " .$sql . "<br>" . $conn->error;
}

$conn->close();

?>