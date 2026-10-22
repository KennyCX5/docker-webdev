<!DOCTYPE html>
<html>

<head>
	<meta charset="utf8">
	<link rel="stylesheet" href="estils.css">
</head>

<body>
	<div id="contenidor">
		<div id="contingutPrincipal">
			<form method="get" name="fr_comp" id="fr_comp" action="">

				<!-- aquest bloc s'haurà de mostrar si hi ha 
				     articles al carro de la compra -->
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
						<tr> <!-- caldrà repetir una fila per cada producte del carro -->
							<td class='cNum'>XXXX</td>
							<td>XXXXXX</td>
							<td class='cNum'>XXXX€</td>
							<td class='cNum'>XXXX€</td>
							<td><input type='submit' name="" value='Eliminar'></td>
						</tr>
					</table>
				</div>
				<!-- fins aquí el bloc del carro -->

				<input type="submit" name="enviar" value="Comprar" />
				<div id="caixaLlistat">
					<input type="submit" name="enviar" value="Afegir al carro" />
					<ul>

						<!-- crear un element li per cada producte 
						     de l'array de productes -->
						<li>
							<img src="imatges/XXXXXXX" height="150" width="150" />
							<span class="etiqDescompte">XXXX%</span>
							<div id="caixaNomP">
								<span class="nom">XXXXXXXXXXX</span><br />
								<span class="marca">XXXXXXX</span><br />
							</div>
							<div id="caixaPreuP">
								<span class="preu_oferta">En Oferta: <b>XXXXX€</b></span><br />
								<span class="preu_anterior">Abans: XXXXX€</span>
								<span class="amb_iva">(IVA inclòs)</span><br />
							</div>
							Quantitat: <input type="text" size="4" name="quantitat[]" value="0" min="0" />
						</li>
						<!-- fins aquí el que cal anar repetint -->

					</ul>
					<div class="clear"></div>
				</div>
			</form>
		</div>
	</div>
</body>

</html>