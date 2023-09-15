<?php
require '../BO/conexion.php';

if(isset($_POST['editar'])) {

    $idTraductor=$_POST['idTraductor'];
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
    $fecha=date('d-m-Y h:i:s');
    $idUsuario=$_POST['idUsuario'];

    $sql = "UPDATE traduccion 
            SET palabraEs='$palabraEs', palabraEnUs='$palabraEnUs', palabraQuc='$palabraQuc', 
                audioEs='$audioEs', audioEnUs='$audioEnUs', audioQuc='$audioQuc', significado='$significado', 
                ejemploEs='$ejemploEs', ejemploEnUs='$ejemploEnUs', ejemploQuc='$ejemploQuc', fecha='$fecha', 
                idUsuario='$idUsuario' 
            WHERE idTraductor='$idTraductor'";

    $resultado = mysqli_query($conexion,$sql);
    if($resultado) {
        echo "¡Se actualizaron los datos correctamente!";
        header("location:../MODEL/registrosPalabras.php");
    } else {
        echo "¡No se puede actualizar la información!"."<br>";
       // echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
    }
}
?>
