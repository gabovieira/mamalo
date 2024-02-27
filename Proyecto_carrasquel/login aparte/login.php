<?php
session_start();

// Verificar si hay un parámetro de registro exitoso
if (isset($_GET['registration']) && $_GET['registration'] == 'success') {
    echo "Registro exitoso. Ahora puedes iniciar sesión.";
}

function findUser($email, $password)
{
    $usersFolder = "users/";
    $filename = $usersFolder . $email . ".txt";

    if (file_exists($filename)) {
        $userData = json_decode(file_get_contents($filename), true);

        if (password_verify($password, $userData["password"])) {
            return true;
        }
    }

    return false;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    if (findUser($email, $password)) {
        $_SESSION["loggedin"] = true;

        // Redirige al usuario a index.php después del inicio de sesión
        header("Location: index.php");
        exit;
    } else {
        $error = "Credenciales incorrectas";
    }
}
?>;