<!DOCTYPE html>
<head>
    <meta charset="UTF-8" />
</head>
<body>
    <center>
        <h1>Achando o maior valor:</h1>
        <br/>
        <h2>Digite quantos números quiser:</h2>
        <form method="POST">
            <input type="text" name="numbers" size="30" placeholder='Separe os números por ", " Ex: 1, 2, 3'  />
            <input type="submit" value="Converter." />
        </form>
        <hr/>
        <?php

        if(isset($_POST['numbers']) && !empty($_POST['numbers'])) {

            #recebendo os numeros do input numa string
            $numbers_string = $_POST['numbers'];

            #cria um array a partir da string no delimitador ", "
            $numbers_array = explode(", ", $numbers_string);

            
            for ($x=0; $x < count($numbers_array); $x++) { 
                
                $intarray[$x] = (int) $numbers_array[$x];
            }
            echo "Os números digitados: ".$numbers_string."<br/>";
            echo "Maior: ".max($intarray);
        } else {
            echo "Você não digitou nenhum número.";
        }
        ?>
    </center>
</body>