<?php
    //======================================================//
    $Cerrar_sesión = (isset($_POST["Cerrar sesión"]) && $_POST["Cerrar sesión"] != "" )?$_POST["Cerrar sesión"] : "No hay";
    $Refrescar = (isset($_POST["Refrescar"]) && $_POST["Refrescar"] != "" )?$_POST["Refrescar"] : "No hay";
    $sesion = (isset($_SESSION["nombre"]) && $_SESSION["nombre"] != "" )?$_SESSION["nombre"] : "No hay";
    //======================================================//
//No s que podría comentar aqui, mmm... Aqui esta mi form  :D

    // quite esto dell if de abajo pq no funcionoó    =====>     || isset($_POST["Refrescar"])
    if(isset($_SESSION["nombre"]))
    {
        echo '<form action="./index.php" method="POST">
                <input type="hidden" value=señal name="sesion">
        </form>';
        header("location: ./index.php");
    }
    if(!isset($_POST["Cerrar sesión"]))
    {
        echo '
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <title>Iniciar sesión</title>
            </head>
            <body>
                <form action="./index.php" method="POST">
                    <fieldset style="width: 350px">
                        <legend><h1><i>Iniciar sesión</i></h1></legend>
                        <label for="name">Nombre:
                            <input type="text" name="name" required>
                        </label>
                        <br><br>
                        <label for="apellidos">Apellidos:
                            <input type="text" name="apellidos" required>
                        </label>
                        <br><br>
                        <label for="grupo">Grupo:
                            <input type="text" name="grupo" required>
                        </label>
                        <br><br>
                        <label for="fecha_nacim">Fecha de nacimiento:
                            <input type="date" name="fecha_nacim" required>
                        </label>
                        <br><br>
                        <label for="correo">Correo electronico:
                            <input type="email" name="correo" required>
                        </label>
                        <br><br>
                        <label for="contra">Contraseña
                            <input type="text" name="contra" required>
                        </label>
                        <br><br>
                        <input type="submit" value="Iniciar sesión" name="Iniciar sesión">
                    </fieldset>
                </form>
            </body>
            </html>
        ';
    }
    //Esto no funcionó aaaaaaaaaaaaaaaaAAAaaaaAAaaAaaaaAaAaAaAaaahhHhHhhhhHhhHh

    /*elseif(isset($_POST["Cerrar sesión"]) && !isset($_POST["Refrescar"]))
    {
        echo '
        
        Para continuar es necesario que refresques la página:
        <br><br>
        <form action="./form.php" method="POST">
                <input type="submit" value="Refrescar" name="Refrescar">
        </form>';
    }*/
    
    
?>