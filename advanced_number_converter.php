
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
			<input type="text" name="number_name" />
			<input type="submit" value="Converter." />
		</form>
		<hr/>
		<?php

		    $number,array(
		    	'zero' => '0',
		    	'um' => '1',
		    	'dois' => '2',
		    	'três' => '3',
		    	'quatro' => '4',
		    	'cinco' => '5',
		    	'seis' => '6',
		    	'sete' => '7',
		    	'oito' => '8',
		    	'nove' => '9',
		    	'dez' => '10',
		    	'onze' => '11',
		    	'doze' => '12',
		    	'treze' => '13',
		    	'catorze' => '14',
		    	'quatorze' => '14',
		    	'quinze' => '15',
		    	'dezesseis' => '16',
		    	'dezessete' => '17',
		    	'dezoito' => '18',
		    	'dezenove' => '19',
		    	'vinte' => '20',
		    	'trinta' => '30',
		    	'quarenta' => '40',
		    	'cinquenta' => '50',
		    	'sessenta' => '60',
		    	'setenta' => '70',
		    	'oitenta' => '80',
		    	'noventa' => '90',
		    	'cem' => '100',
		    	'cento' => '100',
		    	'duzentos' => '200',
		    	'trezentos' => '300',
		    	'quatrocentos' => '400',
		    	'quinhentos' => '500',
		    	'seiscentos' => '600',
		    	'setecentos' => '700',
		    	'oitocentos' => '800',
		    	'novecentos' => '900',
		    	'mil' => '1000',
		    	'milhão' => '1000000',
		    	'milhões' => '1000000',
		    	'bilhão' => '1000000000',
		    	'bilhões' => '1000000000',
		    	'trilhão' => '1000000000000',
		    	'trilhões' => '1000000000000',
		    )
		?>
	</center>
</body>