<!DOCTYPE html>
<head>
    <meta charset="UTF-8" />
</head>
<body>
    <center>
    	<table border="2px">
    		<?php

    		$numbers = array(
    			'0' => 1,
    			'1' => 2,
    			'2' => 3,
    			'3' => 4,
    			'4' => 5,
    			'5' => 6,
    			'6' => 7,
    			'7' => 8,
    			'8' => 9,
    			'9' => 10,
    			);
    		foreach ($numbers as $number) {

    			echo "<tr>";
    			for ($x=1; $x < 11; $x++) {

    				echo "<td>";
    				echo $number * $x;
    				echo "</td>";
    			}

    			echo "</tr>";
    		}
    		?>
    	</table>
    </center>
</body>