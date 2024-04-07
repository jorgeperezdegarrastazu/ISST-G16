<?php
include 'conexion.php';

// Verificar si se han enviado datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger datos del formulario
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $peso = $_POST['peso'];
    $altura = $_POST['altura'];
    $edad = $_POST['edad'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $contrasena = $_POST['contrasena'];

    // Preparar la consulta SQL para insertar los datos
    $sql = "INSERT INTO usuarios_db (nombre, apellido, peso, altura, edad, email, username, contrasena)
            VALUES ('$nombre', '$apellido', '$peso', '$altura', '$edad', '$email', '$username', '$contrasena')";


    // Ejecutar la consulta
    if (mysqli_query($conexion, $sql)) {
        echo "
            <script>
                 alert('Registro exitoso. ¡Bienvenido, $nombre!');
                 window.location = '../index_usuario.php';
            </script>
         ";
    } else {
        echo "
            <script>
                 alert('Error en el registro');
                 window.location = '../index.php';
            </script>
         ";
    }

    // Cerrar la conexión
    mysqli_close($conexion);
}
?>