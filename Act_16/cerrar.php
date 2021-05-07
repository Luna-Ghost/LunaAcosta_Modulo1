<?php
    $Cerrar_sesión = (isset($_POST["Cerrar sesión"]) && $_POST["Cerrar sesión"] != "" )?$_POST["Cerrar sesión"] : "No hay";
    
    //si no se le dio clic al botón de cerrar sesión me redirige al form
    if(!isset($_POST["Cerrar sesión"]))
    {
        header("location: ./form.php");
    }
    //si si le picó en cerrar sesión cierra la sesión y envia el hidden que creo q no funciona
    else
    {
        session_unset();
        session_destroy();
        echo '
        <form action="./cerrar.php" method="POST">
            <input type="hidden" value="Cerrar sesión" name="Cerrar sesión">
        </form>';
        //al hacer lo de ariba me lleva de regreso al form
        header("location: ./form.php");
    }
?>