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


    // $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE email='$email' ");

    // if(mysqli_num_rows($verificar_correo) > 0){
    //     echo '
    //         <script>
    //             alert("Este correo ya está registrado");
    //             window.location = "../index.php";
    //         </script>
    //     ';
    //     exit();
    // } 


    // Ejecutar la consulta
    if (mysqli_query($conexion, $sql)) {
        echo "Registro exitoso. ¡Bienvenido, $name!";
    } else {
        echo "Error al registrar usuario: " . mysqli_error($conexion);
    }

    // Cerrar la conexión
    mysqli_close($conexion);
}
?>