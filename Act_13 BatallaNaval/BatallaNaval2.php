<?php
    //-------------------------------------------------------------------------------//
    
    $cor_y = (isset($_POST["letra"]) && $_POST["letra"] != "" )?$_POST["letra"] : "No hay dato";
    $cor_x = (isset($_POST["numero"]) && $_POST["numero"] != "" )?$_POST["numero"] : "No hay dato";
    $historial = (isset($_POST["historial"]) && $_POST["historial"] != "" )?$_POST["historial"] : "No hay dato";
    $barcos = $_POST["barcos[]"];
    
    //-------------------------------------------------------------------------------//
    echo "<h1><i>Batalla Naval</i></h1>";
    $vidas = 9;
    $disparo = "";
    $barco_1_1 = rand(1, 10);
    $barco_1_2 = rand(1, 10);
    $barco_2_1 = rand(1, 10);
    $barco_2_2 = rand(1, 10);
    $por_si_acaso = ["A1", "A2", "A3", "A4", "G7", "G8", "G9"];
    $pantalla = 0;
    $disparo_estado = 0;
    $coordenadas=[$cor_y, $cor_x];
    $casilla_y =    [
                        1 => "A",
                        2 => "B",
                        3 => "C",
                        4 => "D",
                        5 => "E",
                        6 => "F",
                        7 => "G",
                        8 => "H",
                        9 => "I",
                        10 => "J"
    ];
    //Creando el barco 1 con extensión de 4 casillas
    if($barco_1_1<=10)
    {
        foreach($casilla_y as $num => $letra) {
            if($barco_1_1==$num)
            {
                $barco_1_1=$letra;
            }
        }
    }
    $barco1_inicio = [$barco_1_1.$barco_1_2];
    if($barco_1_2<=6)
    {
        for($i=1; $i<=3; $i++)
        {
            $barco_1_2+=1;
            $x=$barco_1_1.$barco_1_2;
            array_push($barco1_inicio, $x);
        }
    }elseif ($barco_1_2>=6) {
        for($i=1; $i<=3; $i++)
        {
            $barco_1_2-=1;
            $x=$barco_1_1.$barco_1_2;
            array_push($barco1_inicio, $x);
        }
    }
    //creando barco 2 con extensión de 3 casillas
    if($barco_2_1<=10)
    {
        foreach($casilla_y as $num => $letra)
        {
            if($barco_2_1==$num)
            {
                $barco_2_1=$letra;
            }
        }
    }
    if($barco_2_2<=6)
    {
        for($i=1; $i<=3; $i++)
        {
            $barco_2_2+=1;
            $x=$barco_2_1.$barco_2_2;
            array_push($barco1_inicio, $x);
        }
    }elseif ($barco_2_2>=6) {
        for($i=1; $i<=3; $i++)
        {
            $barco_2_2-=1;
            $x=$barco_2_1.$barco_2_2;
            array_push($barco1_inicio, $x);
        }
    }
    $naves = $barco1_inicio;
    
    $disparo=implode("", $coordenadas);
    $historial.=", ".$disparo;
    

    if($vidas>0)
    {
        echo "<h3>Vidas: </h3>";
        for($i=1; $i<=$vidas; $i++)
        {
            echo "<img src='https://png.pngtree.com/png-vector/20191008/ourlarge/pngtree-bullet-icon-in-cartoon-style-png-image_1799886.jpg' alt='bala' height='20'>";
        }

        foreach ($barcos as $coo) {
        if($coo==$disparo)
        {
            echo "Le diste";
            //$disparo_estado=1;
        }
        }
        if ($coo!=$disparo){
                echo "Tiro fallido";
                $vidas-=1;
                //$disparo_estado=2;
            }
        /*foreach ($por_si_acaso as $coo) {
            if($coo==$disparo)
            {
                echo "Le diste";
                //$disparo_estado=1;
            }else{
                echo "Tiro fallido";
                $vidas-=1;
                //$disparo_estado=2;
            }
        }*/
        
        
        echo "<br><br>";
        echo "Historial: <br>";
        echo $historial;
        echo "<br><br>";
        echo "<table border='1'>";
            echo "<thead>";
                echo "<tr>";
                    echo "<th></th>";
                    for ($x=1; $x<=10; $x++)
                    {
                        echo "<th>";
                        echo $x;
                        echo "</th>";
                    }
                echo "</tr>";
            echo "</thead>";
            echo "<tbody>";
                for($y=1; $y<=10; $y++)
                {
                    echo "<tr>";
                        echo "<td>";
                            foreach ($casilla_y as $num => $letra) 
                            {
                                if($y==$num)
                                {
                                    echo $letra;
                                }
                            }
                        echo "</td>";
                        for($cuadro=1; $cuadro<=10; $cuadro++)
                        {
                            echo "<td>";
                                if($disparo_estado==0)
                                {
                                    echo "<img src='./agua.png' alt='imagen de agua' height='25'>";
                                }/*elseif ($disparo_estado==1&&$y==$cor_y&&$cuadro==$cor_x) {
                                    echo "<img src='./tiro_bueno.png' alt='imagen de agua' height='25'>";
                                    $disparo_estado=0;
                                }elseif ($disparo_estado==2&&$y==$cor_y&&$cuadro==$cor_x) {
                                    echo "<img src='./tiro_malo.png' alt='imagen de agua' height='25'>";
                                    $disparo_estado=0;
                                    $vidas-=1;
                                }*/
                            echo "</td>";
                        }
                    echo "</tr>";     
                }
            echo "</tbody>";
        echo "</table>";
        echo "<br>";
        echo "<form action='./BatallaNaval.php' method='POST'>";
            echo "Coordenada X(numero): <input type='number' name='numero' min='0', max='10' required>";
            echo "Coordenada Y(letra): <input type='text' name='letra' required>";
            echo "<input type='hidden' name='historial' value='$historial'>";
            foreach ($naves as $coordenada) {
                echo "<input type='hidden' name='barcos[]'>";
            }
            
            echo " <input type='submit' value='Dispara!!!!'>";
        echo "</form>";
        echo "Coordenadas de barcos: ";
        var_dump($barcos);
        echo "<br>";
        echo $barco_1_1.$barco_1_2."-----".$barco_2_1.$barco_2_2;
    }
    /*if($vidas>0) 
    {
        echo "<h1><i>¡¡¡GANASTE!!!</i></h1>";
        echo "<h2><i>Has eliminado todos los barcos enemigos</i></h2>";
        echo " <img src='https://media.tenor.com/images/a2c75e7f112244519ca3e8f0a9f53099/tenor.gif' alt='GIF ganaste' width='300'>";
    }*/
    if($vidas==0) 
    {
        echo "<h1><i>¡¡¡PERDISTE!!!</i></h1>";
        echo "<h2><i>Has perdido todas tus vidas</i></h2>";
        echo " <img src='https://media.tenor.com/images/26849e8a0223747d1d602f65843dbc6c/tenor.png' alt='Imágen perdiste' width='300'>";
    }
?>