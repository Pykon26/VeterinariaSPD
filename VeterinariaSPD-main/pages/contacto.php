<?php

include("Veterinaria.php");

$nombre = $_POST["Nombre"];
$apellido = $_POST["Apellido"];
$usuario = $_POST["Usuario"];
$contraseña = $_POST["Contraseña"];
$correo = $_POST["Email"];
$telefono = $_POST["Telefono"];


if (empty($nombre) || empty($apellido) || empty($usuario) || empty($contraseña) || empty($correo) || empty($telefono)) {
    echo "Todos los campos son obligatorios.";
} else {
    $sql = "INSERT INTO Cliente (Nombre, Apellido, Usuario, Contraseña, Telefono, Email) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $Veterinaria->prepare($sql);
    $stmt->bind_param("ssssss", $nombre, $apellido, $usuario, $contraseña, $correo, $telefono);

    if ($stmt->execute()) {
        echo "<h1>HAS QUEDADO REGISTRADO.</h1>";
        echo '<script>setTimeout(function(){ window.location.href = "/VeterinariaSPD-main/VeterinariaSPD-main/index.html"; }, 5000);</script>';
    } else {
        echo "Error al insertar datos: " . $stmt->error;
    }
}


/*
$editFormAction = $_SERVER["PHP_SELF"];

if (isset($_SERVER["QUERY_STRING"])) {
    $editFormAction .= "?" .htmlentities($_SERVER["QUERY_STRING"]);
}

if (isset($_POST["MM_insert"]) && ($_POST["MM_insert"] == "form1")) {
    $insertSQL = sprintf("INSERT INTO clientes (Nombre, Apellido, Telefono, Correo, Usuario) VALUES (%s, %s, %s, %s, %s)",
                        GetSQLValueString($_POST["Nombre"], "text"),
                        GetSQLValueString($_POST["Apellido"], "text"),
                        GetSQLValueString($_POST["Mascota"], "text"),
                        GetSQLValueString($_POST["NombreMascota"], "text"),
                        GetSQLValueString($_POST["Usuario"], "text"),
                        GetSQLValueString($_POST["Contraseña"], "text"),
                        GetSQLValueString($_POST["Correo"], "text"),
                        GetSQLValueString($_POST["Telefono"], "text"),)
}
*/

?>