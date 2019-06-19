<!DOCTYPE html>
<head>
    <meta charset="UTF-8" />
</head>
<body>
    <center>
        <h1>Ordenando array:</h1>
        <br/>
        <h2>Digite quantos números quiser:</h2>
        <form method="POST">
            <input type="text" name="numbers" size="35" placeholder='Separe os números por (espaço) " " Ex: 1 2 3' />
            <input type="submit" value="Ordenar." />
        </form>
        <hr/>
        <?php
        if (isset($_POST['numbers'])) {
            
            # recebendo o input do form na variável input numbers que sera do tipo string
            $input_numbers = $_POST['numbers'];
            
            # convertendo a string em um array usando o (espaço) " " como delimitador
            $array_numbers = explode(" ", $input_numbers);

            echo "Você digitou: ";
            print_r($input_numbers);
            echo "<br/><br/>";
            echo "Em ordem crescente: ";
            # ordenando os itens do array do menor para o maior utilizando função nativa do php
            
            sort($array_numbers, SORT_NUMERIC);

            foreach ($array_numbers as $number => $value) {

                echo $value;

                # adiciona uma virgula "," entre os números e quando chegar no ultimo adiciona um ponto "."
                if ($number < (count($array_numbers) -1)) {
                    
                    echo ", ";
                
                } else {

                    echo ". ";
                }             
            }

            echo "<br/><br/>";
            echo "Em ordem decrescente: ";

            rsort($array_numbers, SORT_NUMERIC);

            foreach ($array_numbers as $number => $value) {

                echo $value;

                if ($number < (count($array_numbers) -1)) {
                    
                    echo ", ";
                
                } else {

                    echo ". ";
                    
                }
            }   
        }
        ?>
    </center>
</body>