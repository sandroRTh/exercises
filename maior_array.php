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
            <input type="submit" value="Confirmar." />
        </form>
        <hr/>
        <?php

        #caso o usuário digite e envie algum dado pelo formulario a seguinte função abaixo será executada
        if(isset($_POST['numbers']) && !empty($_POST['numbers'])) {

            #recebendo os numeros do input numa string
            $numbers_string = $_POST['numbers'];

            #cria um array a partir da string no delimitador ", "
            $numbers_array = explode(", ", $numbers_string);

            #converte o array de setrings "1", "2" etc em um array de ints 1, 2, 3...
            for ($x=0; $x < count($numbers_array); $x++) { 
                
                $intarray[$x] = (int) $numbers_array[$x];
            }
            echo "Os números digitados: ".$numbers_string."<br/>";
            
            #exibe o maior número do array através da função "max()"
            echo "Maior: ".max($intarray);
        } else {
            #caso o usuário clique para enviar os dados sem digitar nada, aparecerá a seguinte mensagem na tela:
            echo "Você não digitou nenhum número.";
        }
        ?>
    </center>
</body>