<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "user";


$conn = mysqli_connect($dbhost, $dbuser, $dbpass,  $dbname);
if (!$conn) {
    die("Sin conexion" . mysqli_connect_error());
}

$nombre = $_POST["name"];
$contraseña =  $_POST["password"];

$query = mysqli_query($conn, "SELECT * FROM login WHERE nombre = '" . $nombre . "' and contraseña = '" . $contraseña . "'");
$nr = mysqli_num_rows($query);

if ($nr == 1) {
    echo "Bienvenido " . $nombre;
} else if ($nr == 0) {

    header("Location: login.php");
}
