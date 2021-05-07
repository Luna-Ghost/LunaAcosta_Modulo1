<?php
    //=======================================//
    $name = (isset($_POST["name"]) && $_POST["name"] != "" )?$_POST["name"] : "No hay";
    $apellidos = (isset($_POST["apellidos"]) && $_POST["apellidos"] != "" )?$_POST["apellidos"] : "No hay";
    $grupo = (isset($_POST["grupo"]) && $_POST["grupo"] != "" )?$_POST["grupo"] : "No hay";
    $fecha_nacim = (isset($_POST["fecha_nacim"]) && $_POST["fecha_nacim"] != "" )?$_POST["fecha_nacim"] : "No hay";
    $correo = (isset($_POST["correo"]) && $_POST["correo"] != "" )?$_POST["correo"] : "No hay";
    $contra = (isset($_POST["contra"]) && $_POST["contra"] != "" )?$_POST["contra"] : "No hay";
    $Iniciar_sesión = (isset($_POST["Iniciar sesión"]) && $_POST["Iniciar sesión"] != "" )?$_POST["Iniciar sesión"] : "No hay";
    $señal = (isset($_POST["sesion"]) && $_POST["sesion"] != "" )?$_POST["sesion"] : "No hay";
    //=======================================//
    //chales creo que no funcionaron mis validaciones para detectar si todavia hay sesion abierta, todo lo demás si está UnU
    //si se apreto el boton iniciar sesión y hay un nombre(solo puse nombre pero da por hecho que estan los demás pq son required)...
    if(isset($_POST["sesion"]))
    {
        session_start();
        session_id();
        echo '
            <table border="1">
                <thead>
                    <tr>
                        <th colspan=2><i>Información de inicio de sesión</i></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Nombre completo: </td>
                        <td>';
                            echo $_SESSION["nombre"];
        echo '          </td>
                    </tr>
                    <tr>
                        <td>Grupo: </td>
                        <td>';
                            echo $_SESSION["grupo"];
        echo '          </td>
                    </tr>
                    <tr>
                        <td>Fecha de nacimiento: </td>
                        <td>';
                            echo $_SESSION["fechaNacim"];
        echo '          </td>
                    </tr>
                    <tr>
                        <td>Correo electrónico: </td>
                        <td>';
                            echo $_SESSION["correo"];
        echo '          </td>
                    </tr>
                </tbody>
            </table>
            <br><br>
            <form action="./index.php" method="POST">
                <input type="hidden" value=$_SESSION["nombre"] name="sesion">
            </form>
            <form action="./form.php" method="POST">
                <input type="hidden" value=$_SESSION["nombre"] name="sesion">
            </form>
            <form action="./cerrar.php" method="POST">
                <input type="submit" value="Cerrar sesión" name="Cerrar sesión">
            </form>
        ';
    }
    if(!isset($_POST["Iniciar sesión"]))
    {
        //creo la sesión y la nombro
        session_name($name.$apellidos);
        session_start();
        session_id();
        //cambio los datos a variables de sesión
        $_SESSION["nombre"]=$name." ".$apellidos;
        $_SESSION["grupo"]=$grupo;
        $_SESSION["fechaNacim"]=$fecha_nacim;
        $_SESSION["correo"]=$correo;
        $_SESSION["password"]=$contra;
        //creo mi tablita imprimiendo los datos de las variables de sesión
        echo '
            <table border="1">
                <thead>
                    <tr>
                        <th colspan=2><i>Información de inicio de sesión</i></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Nombre completo: </td>
                        <td>';
                            echo $_SESSION["nombre"];
        echo '          </td>
                    </tr>
                    <tr>
                        <td>Grupo: </td>
                        <td>';
                            echo $_SESSION["grupo"];
        echo '          </td>
                    </tr>
                    <tr>
                        <td>Fecha de nacimiento: </td>
                        <td>';
                            echo $_SESSION["fechaNacim"];
        echo '          </td>
                    </tr>
                    <tr>
                        <td>Correo electrónico: </td>
                        <td>';
                            echo $_SESSION["correo"];
        echo '          </td>
                    </tr>
                </tbody>
            </table>
            <br><br>
            <form action="./index.php" method="POST">
                <input type="hidden" value=$_SESSION["nombre"] name="sesion">
            </form>
            <form action="./form.php" method="POST">
                <input type="hidden" value=$_SESSION["nombre"] name="sesion">
            </form>
            <form action="./cerrar.php" method="POST">
                <input type="submit" value="Cerrar sesión" name="Cerrar sesión">
            </form>
        ';
    }
    //si no hay nombre...
    elseif (isset($_SESSION["nombre"])) {
        //generará las variables de sesión como los guardé en variables arriba, osea...No hay dato
        $_SESSION["nombre"]=$name." ".$apellidos;
        $_SESSION["grupo"]=$grupo;
        $_SESSION["fechaNacim"]=$fecha_nacim;
        $_SESSION["correo"]=$correo;
        $_SESSION["password"]=$contra;
        //hago la tabla
        echo '
            <table border="1">
                <thead>
                    <tr>
                        <th colspan=2><i>Información de inicio de sesión</i></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Nombre completo: </td>
                        <td>';
                            echo $_SESSION["nombre"];
        echo '          </td>
                    </tr>
                    <tr>
                        <td>Grupo: </td>
                        <td>';
                            echo $_SESSION["grupo"];
        echo '          </td>
                    </tr>
                    <tr>
                        <td>Fecha de nacimiento: </td>
                        <td>';
                            echo $_SESSION["fechaNacim"];
        echo '          </td>
                    </tr>
                    <tr>
                        <td>Correo electrónico: </td>
                        <td>';
                            echo $_SESSION["correo"];
        echo '          </td>
                    </tr>
                </tbody>
            </table>
            <br><br>
            <form action="./cerrar.php" method="POST">
                <input type="submit" value="Cerrar sesión" name="Cerrar sesión">
            </form>
            <form action="./index.php" method="POST">
                <input type="hidden" value=$_SESSION["nombre"] name="sesion">
            </form>
        ';
    }
    //se supone que si no hay nombre pasa esto pero...creo que no llega el caso jijiji
    else
    {
        header("location: ./form.php");
    }
    


?>