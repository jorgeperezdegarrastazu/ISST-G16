<?php

include 'conexion.php';

// Verificar si se han enviado datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger datos del formulario
    $username = $_POST['username'];
    $contrasena = $_POST['contrasena'];

    // Consulta SQL para seleccionar el usuario de la base de datos
    $sql = "SELECT * FROM usuarios_db WHERE username='$username'";

    // Ejecutar la consulta
    $resultado = mysqli_query($conexion, $sql);

    // Verificar si se encontró un usuario con el nombre de usuario proporcionado
    if ($resultado && mysqli_num_rows($resultado) > 0) {
        $fila = mysqli_fetch_assoc($resultado);
        // Verificar la contraseña utilizando password_verify
        if (password_verify($contrasena, $fila['contrasena'])) {
            echo "Inicio de sesión exitoso. ¡Bienvenido, $username!";
        } else {
            echo "Contraseña incorrecta.";
        }
    } else {
        echo "Nombre de usuario no encontrado.";
    }

    // Liberar el resultado y cerrar la conexión
    mysqli_free_result($resultado);
    mysqli_close($conexion);
}





?> 