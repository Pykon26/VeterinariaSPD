<?php

# File_name = "Connection_php_mysql.html"
# Type = "MYSQL"
# HTTP = "true"

$hostname_Veterinaria = "localhost";
$database_Veterinaria = "mydb";
$username_Veterinaria = "root";
$password_Veterinaria = "";

$Veterinaria = new mysqli($hostname_Veterinaria, $username_Veterinaria, $password_Veterinaria, $database_Veterinaria);

if (!$Veterinaria) {
    die("Error de conexión: " . mysqli());
}

mysqli_set_charset($Veterinaria, "utf8");

?>

