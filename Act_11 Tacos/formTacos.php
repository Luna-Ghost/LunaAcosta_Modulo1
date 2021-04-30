<?php
    //---------------------------------------------------------------------------------------------------------------//
    $Preg1 = (isset($_POST["Preg1"]) && $_POST["Preg1"] != "" )?$_POST["Preg1"] : "No hay dato";
    $Preg2 = (isset($_POST["Preg2"]) && $_POST["Preg2"] != "" )?$_POST["Preg2"] : "No hay dato";
    $Preg3 = (isset($_POST["Preg3"]) && $_POST["Preg3"] != "" )?$_POST["Preg3"] : "No hay dato";
    $Preg4 = (isset($_POST["Preg4"]) && $_POST["Preg4"] != "" )?$_POST["Preg4"] : "No hay dato";
    $Preg5 = (isset($_POST["Preg5"]) && $_POST["Preg5"] != "" )?$_POST["Preg5"] : "No hay dato";
    $Preg6 = (isset($_POST["Preg6"]) && $_POST["Preg6"] != "" )?$_POST["Preg6"] : "No hay dato";
    $Preg7 = (isset($_POST["Preg7"]) && $_POST["Preg7"] != "" )?$_POST["Preg7"] : "No hay dato";
    $Preg8 = (isset($_POST["Preg8"]) && $_POST["Preg8"] != "" )?$_POST["Preg8"] : "No hay dato";
    $Preg9 = (isset($_POST["Preg9"]) && $_POST["Preg9"] != "" )?$_POST["Preg9"] : "No hay dato";
    $Preg10 = (isset($_POST["Preg10"]) && $_POST["Preg10"] != "" )?$_POST["Preg10"] : "No hay dato";
    //-----Variables-------------------------------------------------------------------------------------------------//
    $i=0;
    $a=0;
    $b=0;
    $c=0;
    $d=0; 
    //=====CÓDIGO====================================================================================================//
    $usuario = ["1" => $Preg1,
                "2" => $Preg2, 
                "3" => $Preg3, 
                "4" => $Preg4, 
                "5" => $Preg5,
                "6" => $Preg6, 
                "7" => $Preg7, 
                "8" => $Preg8,
                "9" => $Preg9, 
                "10" => $Preg10];
    //Esta linea era para checar las respuestas que el usuario habia dado
    //print_r($usuario);
//ciclo que va revisando el arreglo y contando las veces que se repiten las letras
    foreach($usuario as $key => $preg)
    {
        if($preg=="A")
        {
            $a+=1;
        }
        elseif($preg=="B")
        {
            $b+=1;
        }
        elseif($preg=="C")
        {
            $c+=1;
        }
        elseif($preg=="D")
        {
            $d+=1;
        }
    }
    //el pedazo de codigo de abajo era para imprimir la cuenta
    /*echo "<br>";
    echo "A: ".$a;
    echo "<br>";
    echo "B: ".$b;
    echo "<br>";
    echo "C: ".$c;
    echo "<br>";
    echo "D: ".$d;
    echo "<br>";*/
    //----Checando taquitos e imprimiendo felicitaciones---------------------------------------------------------//
//investigue sobre como alinear los h
    echo "<h1 align='center'><i>¡¡¡FELICITACIONES!!!</i></h1><br>";
    
    if(($a>$b)&&($a>$c)&&($a>$d))
    {
        echo "<h2 align='center'>Eres un <strong>taquito de pastor</strong></h2>";
    }elseif(($b>$a)&&($b>$c)&&($b>$d))
    {
        echo "<h2 align='center'>Eres un <strong>taquito de suadero</strong></h2>";
    }elseif(($c>$b)&&($c>$a)&&($c>$d))
    {
        echo "<h2 align='center'>Eres un <strong>taquito de barbacoa</strong></h2>";
    }elseif(($d>$b)&&($d>$c)&&($d>$a))
    {
        echo "<h2 align='center'>Eres un <strong>taquito Lagunero</strong></h2>";
    }else
    {
        if($a==$b)
        {
            echo "<h2 align='center'>Eres un <strong>taquito campechano</strong></h2>";
        }elseif($c==$b)
        {
            echo "<h2 align='center'>Eres un <strong>taquito de carnitas</strong></h2>";
        }elseif($c==$d)
        {
            echo "<h2 align='center'>Eres un <strong>Taco bell</strong></h2>";
        }elseif($a==$d)
        {
            echo "<h2 align='center'>Eres un <strong>Taco light</strong></h2>";
        }elseif($a==$c)
        {
            echo "<h2 align='center'>Eres un <strong>Taco placero</strong></h2>";
        }elseif($b==$d)
        {
            echo "<h2 align='center'>Eres un <strong>taquito de mixiote</strong></h2>";
        }else
        {
            echo "<h2 align='center'>Eres un <strong>taquito de sal</strong></h2>";
        }
    }
//imprime un GIf de taquito
    echo "<div align='center'><img src='https://media1.tenor.com/images/e051d1974d1319a134223480614ffbc8/tenor.gif?itemid=10576778' alt='GIF felicitaciones' width='400'></div>";
?>
