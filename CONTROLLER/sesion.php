<?php
// Se utiliza para llamar al archivo que contine la conexion a la base de datos
require '../BO/conexion.php';

// Validamos que el formulario y que el boton login haya sido presionado
if(isset($_POST['login'])) {

// Obtener los valores enviados por el formulario
$usuario = $_POST['nombre'];
$contrasena = $_POST['contrasenia'];

// Ejecutamos la consulta a la base de datos utilizando la función mysqli_query
$sql = "SELECT * FROM usuario WHERE nombre = '$usuario' and contrasenia = '$contrasena'";
$resultado = mysqli_query($conexion,$sql);
$numero_registros = mysqli_num_rows($resultado);
	if($numero_registros != 0) {
		// Inicio de sesión exitoso
		echo "Inicio de sesión exitoso. Bienvenido, " . $usuario . "!";
        header("location:../MODEL/registrosPalabras.php");
	} else {
		// Credenciales inválidas
		echo "Credenciales inválidas. Por favor, verifica tu nombre de usuario y/o contraseña."."<br>";
		//echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
	}
}
?>