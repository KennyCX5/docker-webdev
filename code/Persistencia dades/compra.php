<?php
session_start();

$carrito = array();


$productes = array(
	array('nom' => 'Disc dur extern Adata 500GB', 'preu' => 59.9),
	array('nom' => 'Disc dur extern Adata 1TB', 'preu' => 89.9),
	array('nom' => 'Western Digital MyBook 3TB', 'preu' => 149.9),
	array('nom' => 'Disc dur extern WD 1TB', 'preu' => 89.9),
	array('nom' => 'Reproductor Multimedia Approx', 'preu' => 56),
	array('nom' => 'Sintonitzador TDT HD NPG', 'preu' => 34.9),
	array('nom' => 'Sintonitzador TDT Dual BB', 'preu' => 54.9),
	array('nom' => 'Smart TV PRIMUX', 'preu' => 89)
);
?>

<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<style>
		label,
		select,
		option {
			font-size: 1.5em
		}

		input {
			font-size: 1em
		}

		table {
			border-collapse: collapse;
		}

		th,
		td {
			text-align: left;
			padding: 8px;
		}

		tr:nth-child(even) {
			background-color: #f2f2f2
		}

		th {
			background-color: #4CAF50;
			color: white;
		}

		input[type=submit] {
			background-color: #4CAF50;
			color: white;
			padding: 14px 20px;
			margin: 8px 0;
			border: none;
			border-radius: 4px;
			cursor: pointer;
		}
	</style>
</head>

<body>







	<form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
		<div>
			<h1>Botiga Virtual</h1>
			<label>
				<span>Producte</span>
				<select id="producte" name="producte">
					<option value="-1">Escull un producte</option>
					<?php foreach ($productes as $i => $p) { ?>
						<option value="<?= $i ?>"><?= $p['nom'] ?> (<?= $p['preu'] ?> €)</option>
					<?php } ?>



				</select>
			</label>
			<label>
				<span>Quantitat</span><input id="quantitat" type="text" name="quantitat" />
			</label>

			<input class="button" type="submit" value="Enviar" />
		</div>
	</form>
	<table>
		<tr>
			<th>Producte</th>
			<th>Quantitat</th>
			<th>Preu unitat</th>
			<th>Total</th>
		</tr>
		<td><?= $productes[$_GET['producte']]['nom'] ?></td>
		<td><?= $_GET['quantitat'] ?></td>
		<td><?= $productes[$_GET['producte']]['preu'] ?> €</td>
		<td><?= $productes[$_GET['producte']]['preu'] * $_GET['quantitat'] ?> €</td>
	</table>

</body>

</html>