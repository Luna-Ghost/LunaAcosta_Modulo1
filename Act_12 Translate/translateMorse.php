<?php
    //---------------------------------------------------------------------------------------------------------------//
    $turn = (isset($_POST["turn"]) && $_POST["turn"] != "" )?$_POST["turn"] : "No hay dato";
    $texto = (isset($_POST["texto"]) && $_POST["texto"] != "" )?$_POST["texto"] : "No hay dato";
    //---------------------------------------------------------------------------------------------------------------//
    
    //arreglo. funcionará para ambos casos
    $abc = [
                ".-" => "A", 
                "-..." => "B", 
                "-.-." => "C", 
                "-.." => "D", 
                "." => "E", 
                "..-." => "F", 
                "--." => "G", 
                "...." => "H", 
                ".." => "I", 
                ".---" => "J", 
                "-.-" => "K", 
                ".-.." => "L", 
                "--" => "M", 
                "-." => "N", 
                "---" => "O", 
                ".--." => "P", 
                "--.-" => "Q", 
                ".-." => "R", 
                "..." => "S", 
                "-" => "T", 
                "..-" => "U", 
                "...-" => "V", 
                ".--" => "W", 
                "-..-" => "X", 
                "-.--" => "Y", 
                "--.." => "Z", 
                ".----" => "1",
                "..---" => "2",
                "...--" => "3",
                "....-" => "4",
                "....." => "5",
                "-...." => "6",
                "--..." => "7",
                "---.." => "8",
                "----." => "9",
                "-----" => "0",
            ];
    //campo de frase a traducir
    echo "<fieldset style='width: 515px'>";
        echo "<legend><h2><i>Texto a traducir</i></h2></legend>";
        //Imprime la frase que se quiere traducir
        echo $texto;
    echo "</fieldset>";
    echo "<br><br>";
    
    //campo de texto traducido
    echo "<fieldset style='width: 515px'>";
        echo "<legend><h2><i>Traduccion</i></h2></legend>";
        //traduccion
        switch ($turn)
        {
            case "Español a Morse":
                //convierto la string del texto en mayusculas
                $texto_min = strtoupper($texto);
                //convierto la string en un arreglo donde cada caracter ocupa un espacio, incluye espacios
                $texto_manejable = str_split($texto_min);
                //var_dump($texto_manejable);
                //for que va checando el arreglo del texto que se introdujo
                foreach ($texto_manejable as $num => $value) 
                {
                    //for que va comparando la letra del texto con el abecedario español-morse
                    foreach($abc as $morse => $letra)
                    {
                        if($value==$letra)
                        {
                            echo $morse." ";
                        }
                    }
                    //este if detecta si hay espacios y si los hay imprime el " / "
                    if ($value==" ") {
                        echo " / ";
                    //este if hace lo mismo en caso de que el usuario introduzca diagonales en lugar de espacios
                    }elseif($value=="/")
                    {
                        echo " / ";
                    }
                }
                break;
            case "Morse a Español":
                //divido el texto separandolo por letras gracias al espacio y guardandolo como array
                $texto_manejable = explode(" ", $texto);
                //var_dump($texto_manejable);
                //for que va checando el arreglo del texto que se introdujo
                foreach ($texto_manejable as $num => $value) 
                {
                    //for que va comparando la letra del texto con el abecedario español-morse
                    foreach($abc as $morse => $letra)
                    {
                        if($value==$morse)
                        {
                            echo $letra;
                        }
                    }
                    
                    //este if detecta diagonales en lugar de espacios para marcarlos como tal (espacios). 
                    //No funciona con espacios ya que los "borra" el explode
                    if($value=="/")
                    {
                        echo " / ";
                    }
                }
                break;
        }

    echo "</fieldset>";
?>