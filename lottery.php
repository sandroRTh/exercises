<!DOCTYPE html>
<head>
    <meta charset="UTF-8" />
</head>
<body>
    <center>
        <h1>Realizando um sorteio.</h1>
        <br/>
        <h2>Digite nomes que irão participar do sorteio:</h2>
        <form method="POST">
        	<input type="text" name="names" size="70" placeholder='digite os nomes separando por ", " ex: João, Maria, Eliza'>
        	<br/>
        	<br/>
        	<input type="submit" value="SORETAR">
        </form>
        <hr>
        <?php
        
        if (isset($_POST['names']) && !empty($_POST['names'])) 
        {
        	$file = fopen("list.txt", "w") or die ("Impossível abrir arquivo");
        	$names = $_POST['names'];
        	fwrite($file, $names);
        	fclose($file);

        	#print_r($names);
        }
        ?>
    </center>
</body>