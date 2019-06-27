<!DOCTYPE html>
<head>
    <meta charset="UTF-8" />
</head>
<body>
	<center>

		<?php

		if(empty($_POST['n1'])) {

		    $n1 = rand(1, 10);
		    $n2 = rand(1, 10);
		} else {
			$userinput = ($_POST['userinput']);
			$n1 = $_POST['n1'];
			$n2 = $_POST['n2'];
		}
		?>
	    <h2> Verificador: 
	    
	        <form method="POST">
	    	    <?php echo $n1." + ".$n2." = "?>
	    	    <input type="number" name="userinput" placeholder="Digite a soma aqui" value="<?php echo $userinput ?>" />
	    	    <input type="hidden" name="n1" value="<?php echo $n1 ?>" />
	    	    <input type="hidden" name="n2" value="<?php echo $n2 ?>" />
	    	    <input type="submit" value="Verificar">
	    	</form>
	    </h2>
	    <?php

	        if(!empty($_POST['userinput'])) {

	        	$sum = $n1 + $n2;

	        	if($userinput == $sum) {

	        		echo "Você passou no teste.";
	        	} else {

	        		echo "Você foi reprovado";
	        	}
	        }
	    ?>
	</center>
</body>