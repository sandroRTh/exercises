<!DOCTYPE html>
<head>
    <meta charset="UTF-8" />
</head>
<body>
    <p>
    	<?php
    	$array = array(
    		'0' => 'casa',
    		'1' => 'bola',
    		'2' => 'dinheiro',
    		'3' => '5',
    		'4' => 'automóvel',
    		'5' => 'dinheiro',
    		'6' => 'casa',
    		'7' => 'estrada',
    		'8' => '5',
    		'9' => 'rato',
    	);
    	$result = array_unique($array);
    	print_r($array);
    	echo '<br/>';
    	print_r($result);
    	?>
    </p>
</body>