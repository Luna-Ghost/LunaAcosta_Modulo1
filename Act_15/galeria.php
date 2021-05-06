<?php
    //Pido disculpas por los dueños de la galeria ya que son un poco flojos
    //Explicación del mensaje de arriba: No le supe a como hacer la tabla de 2 en 2 ni mostrar la galeria directamente sin un archivo
    //PIDO DISCULPAS UnU
    //================================================================//
    $namb = (isset($_POST["name"]) && $_POST["name"] != "" )?$_POST["name"] : "No hay";
    $autor = (isset($_POST["autor"]) && $_POST["autor"] != "" )?$_POST["autor"] : "SinAutor";
    $año = (isset($_POST["año"]) && $_POST["año"] != "" )?$_POST["año"] : "SinAño";
    $obra = (isset($_FILES["obra"]) && $_FILES["obra"] != "" )?$_FILES["obra"] : "Sin archivo";
    $galeria = (isset($_POST["galeria"]) && $_POST["galeria"] != "" )?$_POST["galeria"] : "";
    $archivos = (isset($_POST["archs"]) && $_POST["archs"] != "" )?$_POST["archs"] : "";
    //================================================================//
    //si existe un envio de archivo y no existe el arreglo archivos...
    if(isset($_FILES["obra"]) && !isset($_POST["archs"]))
    {
        $arch = $_FILES["obra"]["tmp_name"];
        $name = $_FILES["obra"]["name"];
        
        //reviso si el archivo enviado es imagen
        if(pathinfo($name, PATHINFO_EXTENSION)=="png"||pathinfo($name, PATHINFO_EXTENSION)=="jpg"||pathinfo($name, PATHINFO_EXTENSION)=="jpeg")
        {
            //cambio el nombre original del archivo y lo guardo en statics
            rename($arch, "statics/$namb$$autor$$año$.".pathinfo($name, PATHINFO_EXTENSION));
            $ruta = "./statics";
            //abro la carpeta statics
            $carpeta = opendir($ruta);
            $archivos = array();
            $hayArchivos = true;
        //mientras haya archivos...
            while($hayArchivos)
            {
                $archivo = readdir($carpeta);
                if($archivo !== false)
                {
                    //si los archivos no son . o .. los añade al arreglo de archivos
                    if($archivo != "." && $archivo != "..")
                    {
                        array_push($archivos, $archivo);
                    }
                }
                else{
                    $hayArchivos = false;
                }
            }
            //var_dump($archivos);
            
            //imprime mensaje de que se subio bien el archivo
            echo "<h1><i>Tu obra se subio correctamente</i></h1>";
                echo "<br><br>";
                //genero boton para enviar a la galeria
                echo '<form action="./galeria.php" method="POST">
                    <input type="submit" name="galeria" value="Ver galeria">';
                    //envio un arreglo con los archivos
                    foreach ($archivos as $vals) {
                        echo "<input type='hidden' name='archs[]' value='$vals'>";
                    }
                echo '</form>';
                //doy la opcion de subir otra imagen en lugar de ir a la galeria
                echo '<form action="./galeria.html">
                    <input type="submit" value="Subir otra imágen">
                </form>';
            //cierro la carpeta
            closedir($carpeta);
        }
        //si no es imagen mandará una advertencia y aparecerá un botón que redireccionará al html
        else
        {
            echo "<h1><i>Formato incorrecto, debe ser png, jpg o jpeg</i></h1>";
            echo "<br><br>";
            echo '<form action="./galeria.html">
                <input type="submit" value="Subir imágen">
            </form>';
        }
    }

    //si se envia el submit para ir a la galeria y ya existe el arreglo archivos...
    if(isset($_POST["galeria"]) && isset($_POST["archs"]))
    {
        $ruta = "./statics";
        //abro la carpeta statics
        $carpeta = opendir($ruta);
        $hayArchivos = true;
        //creo una tabla
        echo '<table border="1">
            <tr>';
            //creo una fila
            //recorro el arreglo archivos
            foreach ($archivos as $key => $value)
            {
                if($value==NULL||$value=="")
                {
                    echo "<h1><i>La galeria está vacía</i></h1>";
                    echo '<form action="./galeria.html">
                        <input type="submit" value="Subir obra">
                    </form>';
                }
                echo "<td>";
                //imprimo la imagen
                    echo "<img src='./statics/".$value."' alt= $value height='150'><br>";
                    //separo el nombre del archivo en un arreglo
                    $ayuda = explode("$", $value);
                    //recorro el arreglo de los elementos del nombre de la obra
                    foreach ($ayuda as $num => $valor) {
                        //creo la lista de los atributos de la obra uwu
                        echo "<ul>";
                        //el primer lugar (0) es el del nombre
                            if($num==0)
                            {
                                echo "<li> Nombre de la obra: ";
                                echo $valor;
                                echo "</li>";
                        //el segundo lugar (1) es el del autor
                            }elseif($num==1)
                            {
                                echo "<li> Autor: ";
                                echo $valor;
                                echo "</li>";
                        //el tercer lugar (2) es el del año, el cuarto(3) es la xtension pero no se necesita
                            }elseif($num==2)
                            {
                                echo "<li> Año: ";
                                echo $valor;
                                echo "</li>";
                            }
                        echo "</ul>";
                        
                    }
                echo "</td>";
            }
            //aqui adelante creo un boton que nos lleva al formulario para subir otra obra
            echo "</tr>
        </table>
        <br><br><br>
        <form action='./galeria.html'>
            <input type='submit' value='Subir otra obra'>
        </form>";
    }
    //si no se ha enviado una obra y no existe el arreglo archivos imprimo un mensje y pongo un boton que lleva al form
    elseif(!isset($_FILES["obra"]) && !isset($_POST["archs"]))
    {
        echo "<h1><i>Ups, la galeria está cerrada</i></h1>";
        echo "<h3><i>Para abrirla tendrás que subir una obra</i></h3>";
        echo '<form action="./galeria.html">
            <input type="submit" value="Subir otra imágen">
        </form>';
    }
?>