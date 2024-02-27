<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT); // Hash de la contraseña

    $userData = [
        "username" => $username,
        "email" => $email,
        "password" => $password,
    ];

    $usersFolder = "users/";
    $filename = $usersFolder . $email . ".txt";

    if (!file_exists($filename)) {
        file_put_contents($filename, json_encode($userData));

        // Redirige al usuario al inicio de sesión después del registro
        header("Location: login.php?registration=success");
        exit;
    } else {
        echo "El usuario ya existe. Por favor, elige otro correo.";
    }
}
?>;