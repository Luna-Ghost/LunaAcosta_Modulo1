<?php
    //-------------------------------------------------------------------------------------//
    $nombre = (isset($_POST["name"]) && $_POST["name"] != "" )?$_POST["name"] : "No hay dato";
    $apM = (isset($_POST["ApeP"]) && $_POST["ApeP"] != "" )?$_POST["ApeP"] : "No hay dato";
    $apP = (isset($_POST["ApeM"]) && $_POST["ApeM"] != "" )?$_POST["ApeM"] : "No hay dato";
    $sexoMH = (isset($_POST["sexoMH"]) && $_POST["sexoMH"] != "" )?$_POST["sexoMH"] : "No hay dato";
    $edad = (isset($_POST["edad"]) && $_POST["edad"] != "" )?$_POST["edad"] : "No hay dato";
    $correo = (isset($_POST["correo"]) && $_POST["correo"] != "" )?$_POST["correo"] : "No hay dato";
    $telefono = (isset($_POST["telefono"]) && $_POST["telefono"] != "" )?$_POST["telefono"] : "No hay dato";
    $celular = (isset($_POST["celular"]) && $_POST["celular"] != "" )?$_POST["celular"] : "No hay dato";
    $escuelaPro = (isset($_POST["escuelaPro"]) && $_POST["escuelaPro"] != "" )?$_POST["escuelaPro"] : "No hay dato";
    $promedio = (isset($_POST["promedio"]) && $_POST["promedio"] != "" )?$_POST["promedio"] : "No hay dato";
    $primOp = (isset($_POST["primOpcion"]) && $_POST["primOpcion"] != "" )?$_POST["primOpcion"] : "No hay dato";
    $segOp = (isset($_POST["segOpcion"]) && $_POST["segOpcion"] != "" )?$_POST["segOpcion"] : "No hay dato";
    //-------------------------------------------------------------------------------------//
    //creando tablita
    echo "<table border='1'>";
        echo "<thead>";
            echo "<tr>";
                //superencabezado
                echo "<th colspan='4'><h2>Solicitud de ingreso a la Universidad</h2></th>";
            echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
            //centré todas las celdas del cuerpo de la tabla
            echo "<tr align='center'>";
                echo "<td>";
//A partir de aqui solo empiezo a colocar los datos en la tablita y sus "subtemas" (no se como decirles, ¿campos?)
                    echo $apP;
                echo "</td>";
                echo "<td>";
                    echo $apM;
                echo "</td>";
                echo "<td colspan='2'>";
                    echo $nombre;
                echo "</td>";
            echo "</tr>";
            echo "<tr align='center'>";
//Los "subtemas/campos/lo que nos e como llamarlos" están subrayados y en negritas
                echo "<td><strong><u>Apellido Paterno</u></strong></td>";
                echo "<td><strong><u>Apellido Materno</u></strong></td>";
                echo "<td colspan='2'><strong><u>Nombre(s)</u></strong></td>";
            echo "</tr>";
            echo "<tr align='center'>";
                echo "<td><strong><u>Sexo</u></strong></td>";
                echo "<td>";
                    echo $sexoMH;
                echo "</td>";
                echo "<td><strong><u>Edad</u></strong></td>";
                echo "<td>";
                    echo $edad;
                echo "</td>";
            echo "</tr>";
            echo "<tr align='center'>";
                echo "<td colspan='2'>";
                    echo $correo;
                echo "</td>";
                echo "<td>";
                    echo $telefono;
                echo "</td>";
                echo "<td>";
                    echo $celular;
                echo "</td>";
            echo "<tr align='center'>";
                echo "<td colspan='2'><strong><u>Correo electronico</u></strong></td>";
                echo "<td><strong><u>Telefono</u></strong></td>";
                echo "<td><strong><u>Celular</u></strong></td>";
            echo "</tr>";
            echo "<tr align='center'>";
                echo "<td><strong><u>Escuela de procedencia</u></strong></td>";
                echo "<td>";
                    echo $escuelaPro;
                echo "</td>";
                echo "<td><strong><u>Promedio</u></strong></td>";
                echo "<td>";
                    echo $promedio;
                echo "</td>";
            echo "</tr>";
            echo "<tr align='center'>";
                echo "<td colspan='2'><strong><u>Primera opcion</u></strong></td>";
                echo "<td colspan='2'>";
                    echo $primOp;
                echo "</td>";
            echo "</tr>";
            echo "<tr align='center'>";
                echo "<td colspan='2'><strong><u>Segunda opcion</u></strong></td>";
                echo "<td colspan='2'>";
                    echo $segOp;
                echo "</td>";
            echo "</tr>";
        echo "</tbody>";
    echo "</table>";
?>
