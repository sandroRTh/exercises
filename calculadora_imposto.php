<!DOCTYPE html>
<head>
    <meta charset="UTF-8" />
</head>
<body bgcolor="#919191">
	<center>

		<p>
			<form method="POST">
				Digite o valor pago pelo produto:
				<input type="number" min="0" step="0.01" name="value">
				<br/>
				<br/>
				Digite o percentual de imposto pago:
				<input type="number" min="0" step="0.05"name="percent">
				<br/>
				<br/>
				<input type="submit" value="Calcular">
			</form>			
		</p>
		<hr>
		<?php
		if(isset($_POST['value']) && !empty($_POST['value'])){
			if(isset($_POST['percent']) && !empty($_POST['percent'])) {

				$product_value = $_POST['value'];
				$tax_percent = $_POST['percent'];
				$initial_value =  $product_value / (1 + $tax_percent / 100);
				$tax_value = $product_value - $initial_value;

				echo "Valor pago pelo produto: R$ ".number_format($product_value, 2, ".", ",")."<br/>";
				echo "Percentual de imposto: ".number_format($tax_percent, 2)." %<br/>";
				echo "Valor pago de impostos: R$ ".number_format($tax_value, 2, ".", ",")."<br/>";
				echo "Valor do produto sem impostos: R$ ".number_format($initial_value, 2, ".", ",")."<br/>";

			} else {

				echo "Preencha o percentual de imposto pago.";

			}
		} else {

			if(isset($_POST['percent']) && !empty($_POST['percent'])) {
				echo "Preencha o valor pago pelo produto.";

			} else {

				echo "Preencha os dois campos por favor.";
			}
		}
		?>
	</center>
</body>