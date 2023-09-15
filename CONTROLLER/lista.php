<?php

require '../BO/conexion.php';

    $sql = "SELECT * FROM traduccion";
             $resultado = mysqli_query($conexion, $sql);
 
             // Mostrar registros en la tabla
             while ($row = mysqli_fetch_assoc($resultado)) {
                 echo "<tr border=1>";
                    echo "<td>" . $row["idTraductor"] . "</td>";
                    echo "<td>" . $row["palabraEs"] . "</td>";
                    echo "<td>" . $row["palabraEnUs"] . "</td>";
                    echo "<td>" . $row["palabraQuc"] . "</td>";
                    echo "<td>" . $row["audioEs"] . "</td>";
                    echo "<td>" . $row["audioEnUs"] . "</td>";
                    echo "<td>" . $row["audioQuc"] . "</td>";
                    echo "<td>" . $row["significado"] . "</td>";
                    echo "<td>" . $row["ejemploEs"] . "</td>";
                    echo "<td>" . $row["ejemploEnUs"] . "</td>";
                    echo "<td>" . $row["ejemploQuc"] . "</td>";
                    echo "<td>" . $row["fecha"] . "</td>";
                    
                 echo "</tr>";
                
             }
             
?>
