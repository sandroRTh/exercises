<!DOCTYPE html>
<head>
    <meta charset="UTF-8" />
</head>
<body>
    <center>
        <h1>Conversor de números!</h1>
        <br/>
        <h2>Digite por extenso o(s) número(s) a ser convertido(s):</h2>
        <form method="POST">
            <input type="text" name="number_name" size="30" placeholder='Separe os números por ", " Ex: um, dois'  />
            <input type="submit" value="Converter." />
        </form>
        <hr/>

        <?php
        //recebi os dados do fomulário em um array
        $data = filter_input_array(INPUT_POST, FILTER_DEFAULT);
        //se existirem dados
        if($data) {
            //pego todos os campos informados na chave valores - strings
            $user_input = $data['number_name'];            
            $numbers = array(
                'zero'      => '0',
                'um'        => '1',
                'dois'      => '2',
                'três'      => '3',
                'tres'      => '3',
                'quatro'    => '4',
                'cinco'     => '5',
                'seis'      => '6',
                'sete'      => '7',
                'oito'      => '8',
                'nove'      => '9',
                'dez'       => '10',
                'onze'      => '11',
                'doze'      => '12',
                'treze'     => '13',
                'catorze'   => '14',
                'quatorze'  => '14',
                'quinze'    => '15',
                'dezesseis' => '16',
                'dezessete' => '17',
                'dezoito'   => '18',
                'dezenove'  => '19',
                'vinte'     => '20',
                 );

            //dei um explode para criar um array na variável valores separando por ", "
            $number_names = explode(", ", $user_input);

            echo "Números digitados: ".$user_input."<br/>";
            echo "Correspondentes: ";
            //faço um loop na varivel $fields
            
            foreach ($number_names as $chave => $number_name) {
                //se a chave existir dentro da variavel $arr
                if (isset($numbers[$number_name])) {
                    //dou um echo no valor
                    echo $numbers[$number_name];
                }

                if ($chave < (count($number_names) -1)) {
                    
                    echo ", ";
                
                } else {

                    echo ". ";
                }
            }
        }
        ?>
    </center>
</body>