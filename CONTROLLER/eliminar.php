<?php
require '../BO/conexion.php';

if(isset($_POST['eliminar'])) {

    $idTraductor=$_POST['idTraductor'];

    $sql = "DELETE FROM traduccion WHERE idTraductor='$idTraductor'";
    $resultado = mysqli_query($conexion,$sql);

    if($resultado) {
        echo "¡Se eliminó el registro correctamente!";
        header("location:../MODEL/registrosPalabras.php");
    } else {
        echo "¡No se pudo eliminar el registro!"."<br>";
        //echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
    }
}
?>
