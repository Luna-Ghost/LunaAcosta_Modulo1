<?php
    //alt y anch son iguales pq un tabler de ajedrez es cuadrado
    $alt=8;
    $anch=$alt;
    //i lleva los ciclos de celdas
    $i=0;
    //v lleva al dios while
    $v=1;
    //turn checa si se debe hacer una fila a o una fila b
    $turn=0;
    //color sirve para designar el color del cuadrito/celda
    $color=0;

    echo "<h1>Tablero</h1>";
    echo "<br><br>";

    //while supremo creador de filas
    while($v<=$alt)
    {
        //Se crea una sola tabla sin encabezados
        echo "<table border='1' style='border-collapse: collapse'>";
            echo "<tr>";
                //IF de casos $alt par
                if($alt%2==0)
                {  
                    //if creador de fila a
                    if($turn==0)
                    {
                        //revisa si el ultimo color fué 1 o 0 para que no se repita en la siguiente fila
                        if($color==1)
                        {
                            $color=0;
                        }
                        elseif($color==0)
                        {
                            $color=1;
                        }
                        //ciclo creador de celdas
                        for($i=1; $i<=$anch; $i++)
                        {
                            switch ($color)
                            {
                                case 0:
                                {
                                    echo "<td><img src='./imgs/blanco.jpg' width='30' height='30' alt='blanco'></td>";
                                    $color=1;
                                    break;
                                }   
                                case 1:
                                {
                                    echo "<td><img src='./imgs/negro.jpg' width='30' height='30' alt='negro'></td>";
                                    $color=0;
                                    break;
                                }   
                            }
                        }
                        $turn=1;
                    }
                    //if creador de fila b
                    elseif($turn==1)
                    {
                        //revisa si el ultimo color fué 1 o 0 para que no se repita en la siguiente fila
                        if($color==1)
                        {
                            $color=0;
                        }
                        else
                        {
                            $color=1;
                        }
                        //ciclo creador de celdas
                        for($i=1; $i<=$anch; $i++)
                        {
                            switch ($color)
                            {
                                case 0:
                                {
                                    echo "<td><img src='./imgs/blanco.jpg' width='30' height='30' alt='blanco'></td>";
                                    $color=1;
                                    break;
                                }   
                                case 1:
                                {
                                    echo "<td><img src='./imgs/negro.jpg' width='30' height='30' alt='negro'></td>";
                                    $color=0;
                                    break;
                                }   
                            }
                        }
                        $turn=0;
                    }
                }
                //IF de casos $alt impar
                else
                {  
                    //if creador de fila a
                    if($turn==0)
                    {
                        //ciclo creador de celdas
                        for($i=1; $i<=$anch; $i++)
                        {
                            switch ($color)
                            {
                                case 0:
                                {
                                    echo "<td><img src='./imgs/blanco.jpg' width='30' height='30' alt='blanco'></td>";
                                    $color=1;
                                    break;
                                }   
                                case 1:
                                {
                                    echo "<td><img src='./imgs/negro.jpg' width='30' height='30' alt='negro'></td>";
                                    $color=0;
                                    break;
                                }   
                            }
                        }
                        $turn=1;
                    }
                    //if creador de fila b
                    elseif($turn==1)
                    {
                        //ciclo creador de celdas
                        for($i=1; $i<=$anch; $i++)
                        {
                            switch ($color)
                            {
                                case 0:
                                {
                                    echo "<td><img src='./imgs/blanco.jpg' width='30' height='30' alt='blanco'></td>";
                                    $color=1;
                                    break;
                                }   
                                case 1:
                                {
                                    echo "<td><img src='./imgs/negro.jpg' width='30' height='30' alt='negro'></td>";
                                    $color=0;
                                    break;
                                }   
                            }
                        }
                        $turn=0;
                    }
                }
            echo "</tr>";
        echo "</table>";
        //incremento
        $v=$v+1;
    }
?>



