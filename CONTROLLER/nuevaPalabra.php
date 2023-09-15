<?php
// Se utiliza para llamar al archivo que contine la conexion a la base de datos
require '../BO/conexion.php';

// Validamos que el formulario y que el boton registro haya sido presionado
if(isset($_POST['agregar'])) {

// Obtener los valores enviados por el formulario
$palabraEs = $_POST['palabraEs'];
$palabraEnUs = $_POST['palabraEnUs'];
$palabraQuc = $_POST['palabraQuc'];
$audioEs = $_POST['audioEs'];
$audioEnUs = $_POST['audioEnUs'];
$audioQuc = $_POST['audioQuc'];
$significado = $_POST['significado'];
$ejemploEs = $_POST['ejemploEs'];
$ejemploEnUs = $_POST['ejemploEnUs'];
$ejemploQuc = $_POST['ejemploQuc'];
$fecha=date("d/m/y");
$idUsuario=$_POST['$idUsuario'];


// Insertamos los datos en la base de datos
$sql = "INSERT INTO traduccion (idTraductor, palabraEs, palabraEnUs, palabraQuc, audioEs, audioEnUs, audioQuc, significado, ejemploEs, ejemploEnUs, ejemploQuc, fecha, idUsuario) VALUES (null, '$palabraEs', '$palabraEnUs', '$palabraQuc', '$audioEs', '$audioEnUs', '$audioQuc', '$significado', '$ejemploEs', '$ejemploEnUs', '$ejemploQuc', '$fecha', '$idUsuario')";
$resultado = mysqli_query($conexion,$sql);
	if($resultado) {
		// Iserción correcta
		echo "¡Se insertaron los datos correctamente!";
        header("location:../MODEL/registrosPalabras.php");
	} else {
		// Iserción fallida
		echo "¡No se puede insertar la informacion!"."<br>";
		//echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
	}
}
?>
