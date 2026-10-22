<?php
	session_start();
	require('dades.php');

	if (!isset($_SESSION['carro'])) {
		$_SESSION['carro'] = array();
	}

	if ($_SERVER['REQUEST_METHOD'] === 'POST') {

		if (isset($_POST['buidar'])) {
			$_SESSION['carro'] = array();
		}

		if (isset($_POST['eliminar'])) {
			$idx = (int)$_POST['eliminar'];
			unset($_SESSION['carro'][$idx]);
		}
		if (isset($_POST['enviar']) && $_POST['enviar'] === 'Afegir al carro' && isset($_POST['quantitat'])) {
			foreach ($_POST['quantitat'] as $idx => $qtt) {
				$idx = (int)$idx;
				$qtt = (int)$qtt;
				if ($qtt > 0 && isset($productes[$idx])) {
					if (isset($_SESSION['carro'][$idx])) {
						$_SESSION['carro'][$idx] += $qtt;
					} else {
						$_SESSION['carro'][$idx] = $qtt;
					}
				}
			}
		}

		header('Location: ' . $_SERVER['PHP_SELF']);
		exit;
	}

	$carro = $_SESSION['carro'];
	$totalCarro = 0;
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf8">
	<link rel="stylesheet" href="estils.css">
</head>

<body>
	<div id="contenidor">
		<div id="contingutPrincipal">
			<form method="post" name="fr_comp" id="fr_comp" action="">

				<input type="submit" name="enviar" value="Afegir al carro" style="position:absolute; left:-9999px;" tabindex="-1" />

				<?php if (count($carro) > 0) { ?>
				<div id="carroCompra">
					<h3>Carro de la compra</h3>
					<input type="submit" name="buidar" value="Buidar carro" />

					<table>
						<tr>
							<td>Qtt</td>
							<td>Descripció</td>
							<td>Preu unitari</td>
							<td>Preu Total</td>
							<td></td>
						</tr>
						<?php foreach ($carro as $i => $qtt) {
							$p = $productes[$i];
							$total = $qtt * (float)$p['preuOferta'];
							$totalCarro += $total;
						?>
						<tr>
							<td class='cNum'><?=$qtt?></td>
							<td><?=$p['descripcio']?></td>
							<td class='cNum'><?=number_format((float)$p['preuOferta'], 2, '.', '')?>€</td>
							<td class='cNum'><?=number_format($total, 2, '.', '')?>€</td>
							<td><button type='submit' name="eliminar" value="<?=$i?>">Eliminar</button></td>
						</tr>
						<?php } ?>
					</table>
				</div>
				<input type="submit" name="enviar" value="Comprar" />
				<?php } ?>

				<div id="caixaLlistat">
					<input type="submit" name="enviar" value="Afegir al carro" />
					<ul>

						<?php foreach ($productes as $i => $p) { ?>
						<li>
							<img src="imatges/<?=$p['imatge']?>" height="150" width="150" />
							<span class="etiqDescompte"><?=$p['descompte']?>%</span>
							<div id="caixaNomP">
								<span class="nom"><?=$p['descripcio']?></span><br />
								<span class="marca"><?=$p['marca']?></span><br />
							</div>
							<div id="caixaPreuP">
								<span class="preu_oferta">En Oferta: <b><?=$p['preuOferta']?>€</b></span><br />
								<span class="preu_anterior">Abans: <?=$p['preuAbans']?>€</span>
								<span class="amb_iva">(IVA inclòs)</span><br />
							</div>
							Quantitat: <input type="number" size="2" name="quantitat[<?=$i?>]" value="0" min="0" />
						</li>
						<?php } ?>

					</ul>
					<div class="clear"></div>
				</div>
			</form>
		</div>
	</div>
</body>

</html>