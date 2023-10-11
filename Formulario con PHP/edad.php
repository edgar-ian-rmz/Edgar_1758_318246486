<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $edad = $_POST["edad"];
    $contrasena = $_POST["contrasena"];

    // Aquí se verificacan de los datos.
    // Ejemplo, snombre = "edgar", la edad es 55 y la contraseña es "secreto", considerando que son los datos correctos:
    if ($nombre == "Edgar" && $contrasena == "secreto") {
        echo "Mi nombre es: $nombre, tengo $edad años.";
    } else {
        echo "Tus datos no coinciden. ";
        echo "<a href='index.html'>Regresar al formulario</a>";
    }
}
?>