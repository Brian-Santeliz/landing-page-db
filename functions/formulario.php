<?php 
    $host = 'localhost';
    $dbname = 'mundo_natural';
    $username = 'root';
    $password = '';

    $conn =  mysqli_connect($host, $username, $password, $dbname);
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $mensaje = $_POST["mensaje"];
    $query ="INSERT INTO contacto (nombre,email,mensaje) VALUES ('$nombre', '$email', '$mensaje')";
    mysqli_query($conn,$query)
?>