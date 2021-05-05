<?php
    //=======================================================================================//
    //App 1
    $hora = (isset($_POST["hora"]) && $_POST["hora"] != "" )?$_POST["hora"] : "No hay dato";
    $Nueva_York = (isset($_POST["NuevaYork"]) && $_POST["NuevaYork"] != "" )?$_POST["NuevaYork"] : "";
    $São_Paulo = (isset($_POST["SãoPaulo"]) && $_POST["SãoPaulo"] != "" )?$_POST["SãoPaulo"] : "";
    $Madrid = (isset($_POST["Madrid"]) && $_POST["Madrid"] != "" )?$_POST["Madrid"] : "";
    $Paris = (isset($_POST["Paris"]) && $_POST["Paris"] != "" )?$_POST["Paris"] : "";
    $Roma = (isset($_POST["Roma"]) && $_POST["Roma"] != "" )?$_POST["Roma"] : "";
    $Atenas = (isset($_POST["Atenas"]) && $_POST["Atenas"] != "" )?$_POST["Atenas"] : "";
    $Bejin = (isset($_POST["Bejin"]) && $_POST["Bejin"] != "" )?$_POST["Bejin"] : "";
    $Tokio = (isset($_POST["Tokio"]) && $_POST["Tokio"] != "" )?$_POST["Tokio"] : "";
    //App 2
    $cumple = (isset($_POST["cumple"]) && $_POST["cumple"] != "" )?$_POST["cumple"] : "No hay dato";
    $dias = (isset($_POST["dias"]) && $_POST["dias"] != "" )?$_POST["dias"] : "";
    $horas = (isset($_POST["horas"]) && $_POST["horas"] != "" )?$_POST["horas"] : "";
    $minutos = (isset($_POST["minutos"]) && $_POST["minutos"] != "" )?$_POST["minutos"] : "";
    $cumpleaños = (isset($_POST["fin_sem"]) && $_POST["fin_sem"] != "" )?$_POST["fin_sem"] : "";
    //=======================================================================================//
    //App 1
    if(isset($_POST["hora"]))
    {
        echo "<table border='1'>";
            echo "<thead>";
                echo "<tr>";
                    echo "<th colspan='2'>";
                        echo "<h1><i>Reloj mundial</i></h1>";
                    echo "</th>";
                echo "</tr>";
            echo "</thead>";
            echo "<tbody>";
                echo "<tr>";
                    echo "<td><h4>Ciudad de México</h3></td>";
                    echo "<td>$hora</td>";
                echo "</tr>";
                //proceso de cada ciudad//
                //reviso si existe el dato, si si hago lo del if, si no pues no
                //con la funcion strtotime le agrego las horas correspondientes segun las zonas horarias
                //cambio el formato de la variable con la hora de la ciudad a "horas en 24:minutos"
                //imprimo hora en casilla correspondiente
                //______________________//
                if(isset($_POST["NuevaYork"]))
                {
                    echo "<tr>";
                        echo "<td><h4>New York</h3></td>";
                        $NY = strtotime ( '+1 hour' , strtotime ($hora) ) ; 
                        $NY = date ( 'H:i' , $NY); 
                        echo "<td>$NY</td>";
                    echo "</tr>";
                }
                if(isset($_POST["SãoPaulo"]))
                {
                    echo "<tr>";
                        echo "<td><h4>São Paulo</h3></td>";
                        $SP = strtotime ( '+2 hour' , strtotime ($hora) ) ; 
                        $SP = date ( 'H:i' , $SP); 
                        echo "<td>$SP</td>";
                    echo "</tr>";
                }
                if(isset($_POST["Madrid"]))
                {
                    echo "<tr>";
                        echo "<td><h4>Madrid</h3></td>";
                        $M = strtotime ( '+7 hour' , strtotime ($hora) ) ; 
                        $M = date ( 'H:i' , $M); 
                        echo "<td>$M</td>";
                    echo "</tr>";
                }
                if(isset($_POST["Paris"]))
                {
                    echo "<tr>";
                        echo "<td><h4>Paris</h3></td>";
                        $P = strtotime ( '+7 hour' , strtotime ($hora) ) ; 
                        $P = date ( 'H:i' , $P); 
                        echo "<td>$P</td>";
                    echo "</tr>";
                }
                if(isset($_POST["Roma"]))
                {
                    echo "<tr>";
                        echo "<td><h4>Roma</h3></td>";
                        $R = strtotime ( '+7 hour' , strtotime ($hora) ) ; 
                        $R = date ( 'H:i' , $R); 
                        echo "<td>$R</td>";
                    echo "</tr>";
                }
                if(isset($_POST["Atenas"]))
                {
                    echo "<tr>";
                        echo "<td><h4>Atenas</h3></td>";
                        $A = strtotime ( '+8 hour' , strtotime ($hora) ) ; 
                        $A = date ( 'H:i' , $A); 
                        echo "<td>$A</td>";
                    echo "</tr>";
                }
                if(isset($_POST["Bejin"]))
                {
                    echo "<tr>";
                        echo "<td><h4>Beijing</h3></td>";
                        $B = strtotime ( '+13 hour' , strtotime ($hora) ) ; 
                        $B = date ( 'H:i' , $B); 
                        echo "<td>$B</td>";
                    echo "</tr>";
                }
                if(isset($_POST["Tokio"]))
                {
                    echo "<tr>";
                        echo "<td><h4>Tokio</h3></td>";
                        $T = strtotime ( '+14 hour' , strtotime ($hora) ) ; 
                        $T = date ( 'H:i' , $T); 
                        echo "<td>$T</td>";
                    echo "</tr>";
                }
            echo "</body>";
        echo "</table>";
    }
    //App 2
    if(isset($_POST["cumple"]))
    {
        //saco la fecha de hoy
        $hoy = date("Y-m-d");
        //convierto la fecha de hoy y la del cumpleaños en segundos
        $hoy_manejable = strtotime($hoy);
        $cumple_manejable = strtotime($cumple);
        echo "<table border='1'>";
            echo "<thead>";
                echo "<tr>";
                    echo "<th>";
                        echo "<i>Cumpleaños</i>";
                    echo "</th>";
                    echo "<th>";
                        echo $cumple;
                    echo "</th>";
                echo "</tr>";
            echo "</thead>";
            echo "<tbody>";
                
                if(isset($_POST["dias"]))
                {
                    echo "<tr>";
                        echo "<td>Dias</td>";
                        echo "<td>";
                        //explicación rapida de cada proceso------//
                        //si los segundos del cumpleaños sonm enores a la fecha de hoy el cumple ya paso
                        //por lo que se le agrega la cantidad de segundos que tiene un año
                        //agora podremos calcular el cumpleaños del año que sigue

                        //si la fecha del cumpleaños coincide con hoy se imprime Hoy es tu cumpelaños, felicidades!!!!!

                        //si los segundos del cumpleaños son mayores a la fecha de hoy el cumple no ha pasado
                        //por lo que simplemente se resta la fecha de hoy a la fecha del cumple y obtenemos los dias que faltan
                        //________________________________________//
                        if($cumple_manejable<$hoy_manejable)
                        {
                            //agregando un año a $hoy
                            $cumple_mayor = $cumple_manejable+31536000;
                            $days = $cumple_mayor-$hoy_manejable;
                            //conversion a minutos
                            $days = $days/60;
                            //conversion a horas
                            $days = $days/60;
                            //conversion a dias
                            $days = $days/24;
                            echo $days;
                        }
                        if($cumple_manejable==$hoy_manejable)
                        {
                            echo "Hoy es tu cumpelaños, felicidades!!!!!";
                        }
                        if($cumple_manejable>$hoy_manejable)
                        {
                            $days = $cumple_manejable-$hoy_manejable;
                            //conversion a minutos
                            $days = $days/60;
                            //conversion a horas
                            $days = $days/60;
                            //conversion a dias
                            $days = $days/24;
                            echo $days;
                        }
                        echo "</td>";
                    echo "</tr>";
                }
                if(isset($_POST["horas"]))
                {
                    echo "<tr>";
                        echo "<td>Horas</td>";
                        echo "<td>";
                        if($cumple_manejable<$hoy_manejable)
                        {
                            //agregando un año a $hoy
                            $cumple_mayor = $cumple_manejable+31536000;
                            $days = $cumple_mayor-$hoy_manejable;
                            //conversion a minutos
                            $days = $days/60;
                            //conversion a horas
                            $days = $days/60;
                            echo $days;
                        }
                        if($cumple_manejable==$hoy_manejable)
                        {
                            echo "Hoy es tu cumpelaños, felicidades!!!!!";
                        }
                        if($cumple_manejable>$hoy_manejable)
                        {
                            $days = $cumple_manejable-$hoy_manejable;
                            //conversion a minutos
                            $days = $days/60;
                            //conversion a horas
                            $days = $days/60;
                            echo $days;
                        }
                        echo "</td>";
                    echo "</tr>";
                }
                if(isset($_POST["minutos"]))
                {
                    echo "<tr>";
                        echo "<td>Minutos</td>";
                        echo "<td>";
                        if($cumple_manejable<$hoy_manejable)
                        {
                            //agregando un año a $hoy
                            $cumple_mayor = $cumple_manejable+31536000;
                            $days = $cumple_mayor-$hoy_manejable;
                            //conversion a minutos
                            $days = $days/60;
                            echo $days;
                        }
                        if($cumple_manejable==$hoy_manejable)
                        {
                            echo "Hoy es tu cumpelaños, felicidades!!!!!";
                        }
                        if($cumple_manejable>$hoy_manejable)
                        {
                            $days = $cumple_manejable-$hoy_manejable;
                            //conversion a minutos
                            $days = $days/60;
                            echo $days;
                        }
                        echo "</td>";
                    echo "</tr>";
                }
                if(isset($_POST["fin_sem"]))
                {
                    echo "<tr>";
                        echo "<td>¿Es fin de semana?</td>";
                        echo "<td>";
                            $hoy_dia = date("D");
                            if($cumple_manejable<$hoy_manejable)
                            {
                                //si el cumple ya paso agregamos un año a la fecha del cumple
                                //obtenemos la fecha con getdate
                                //revisamos si en la llave de weekday hay coincidencias con los dias correspondientes al fin de semana
                                //si si imprime Es fin de semana, si no imprime No es fin de semana
                                $cumple_dia = strtotime ( '+1 year' , strtotime ($cumple) ) ; 
                                $cumple_dia = getdate($cumple_dia);
                                foreach ($cumple_dia as $key => $value) {
                                    if($key=="weekday")
                                    {
                                        if($value=="Sunday"||$value=="Saturday")
                                        {
                                            echo "Es fin de semana";
                                        }
                                        elseif($value=="Monday"||$value=="Tuesday"||$value=="Wednesday"||$value=="Thursday"||$value=="Friday")
                                        {
                                            echo "No es fin de semana";
                                        }
                                    }
                                }
                            }
                            if($cumple_manejable==$hoy_manejable)
                            {
                                //si el cumple es hoy se imprime el mensaje Hoy es tu cumpelaños, felicidades!!!!!
                                //obtenemos el dia de la semana de hoy con $hoy_dia = date("D"); en la linea 247
                                //revisamos si hoy_dia coincide con los dias correspondientes al fin de semana
                                //si si imprime Es fin de semana, si no imprime No es fin de semana
                                echo "Hoy es tu cumpelaños, felicidades!!!!!";
                                echo "<br>";
                                if($hoy_dia=="Sunday"||$hoy_dia=="Saturday")
                                {
                                    echo "Es fin de semana";
                                }
                                else{
                                    echo "No es fin de semana";
                                }
                            }
                            if($cumple_manejable>$hoy_manejable)
                            {
                                //el cumple no ha pasado pero manda error asi que le agregamos 1 minuto, no influye en el dia
                                //obtenemos la fecha con getdate
                                //revisamos si en la llave de weekday hay coincidencias con los dias correspondientes al fin de semana
                                //si si imprime Es fin de semana, si no imprime No es fin de semana
                                $cumple_dia = strtotime ( '+1 minute' , strtotime ($cumple) ) ; 
                                $cumple_dia = getdate($cumple_dia);
                                foreach ($cumple_dia as $key => $value) {
                                    if($key=="weekday")
                                    {
                                        if($value=="Sunday"||$value=="Saturday")
                                        {
                                            echo "Es fin de semana";
                                        }
                                        elseif($value=="Monday"||$value=="Tuesday"||$value=="Wednesday"||$value=="Thursday"||$value=="Friday")
                                        {
                                            echo "No es fin de semana";
                                        }
                                    }
                                }
                            }
                        echo "</td>";
                    echo "</tr>";
                }
            echo "</body>";
        echo "</table>";
        echo "<br><br>";
        echo "<img src='https://sd.keepcalms.com/i/keep-calm-and-junten-dinero-que-se-acerca-mi-cumplea%C3%B1os.png' alt='Imagen de cumpleaños proximo' width='213'>";
    }
?>