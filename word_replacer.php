<!DOCTYPE html>
<head>
    <meta charset="UTF-8" />
</head>
<body>
    <center>
        <h1>Substituindo uma palavra:</h1>
    </center>
        <br/>
        <form method="POST">
            Digite uma frase qualquer:
            <input type="text" name="phrase" size="80" placeholder="Digite aqui a sua frase..." />
            <br/>
            <br/>
            Digite uma palavra da frase a ser substituida:
            <input type="text" name="replaced" placeholder="palavra 1" />
            <br/>
            <br/>
            Digite a palavra pela qual você quer susbstituir:
            <input type="text" name="replacer"  placeholder="palavra 2" />

            <input type="submit" value="Substituir" />
        </form>
        <hr/>


        <?php

        $phrase = $_POST['phrase'];
        $word_1 = $_POST['replaced'];
        $word_2 = $_POST['replacer'];

        if (isset($_POST['phrase']) && !empty($_POST['phrase'])) {
            if (isset($_POST['replaced']) && !empty($_POST['replaced'])) {
                if (isset($_POST['replacer']) && !empty($_POST['replacer'])) {
                    
                    echo 'Frase original: '.$phrase.'</br>';
                    echo 'Você trocou: '.$word_1.' por '.$word_2.'; o resultado está abaixo.<br/>';

                    echo preg_replace("/\b$word_1\b/", $word_2, $phrase);
                    #echo str_replace($word_1, $word_2, $phrase);

                } else {

                    echo "Você não definiu a segunda palavra.";

                }
            } else {

                if (isset($_POST['replacer']) && !empty($_POST['replacer'])){
                    
                    echo "Você não definiu a palavra a ser substituida.<br/>";

                } else {

                    echo "Você não definiu as palavras.";

                }       
            }
        } else { 
            if (isset($_POST['replaced']) && !empty($_POST['replaced'])) {
                if (isset($_POST['replacer']) && !empty($_POST['replacer'])) {

                    echo "Você não digitou nenhuma frase.";
                } else {

                    echo "Você não digitou a frase e a segunda palavra";
                }
            } else { 
                if (isset($_POST['replacer']) && !empty($_POST['replacer'])){

                    echo "Você não digitou a frase e a primeira palavra.";

                } else {
                    echo "Você não digitou nada";   
                }
            }
        }
        ?>
</body>