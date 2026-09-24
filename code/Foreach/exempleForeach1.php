<?php
	$municipis = array(
		'Alpens',
		'Balenyà',
		'Brull',
		'Calldetenes',
		'Centelles',
		'Collsuspina',
		'Espinelves',
		'Folgueroles',
		'Gurb',
		'Lluçà',
		'Malla',
		'Manlleu',
		'Masies de Roda',
		'Masies de Voltregà',
		'Montesquiu',
		'Muntanyola',
		'Olost',
		'Orís',
		'Oristà',
		'Perafita',
		'Prats de Lluçanès',
		'Roda de Ter',
		'Rupit i Pruit',
		'Sant Agustí de Lluçanès',
		'Sant Bartomeu del Grau',
		'Sant Boi de Lluçanès',
		'Sant Hipòlit de Voltregà',
		'Sant Julià de Vilatorta',
		'Sant Martí d\'Albars',
		'Sant Martí de Centelles',
		'Sant Pere de Torelló',
		'Sant Quirze de Besora',
		'Sant Sadurní d\'Osormort',
		'Sant Vicenç de Torelló',
		'Santa Cecília de Voltregà',
		'Santa Eugènia de Berga',
		'Santa Eulàlia de Riuprimer',
		'Santa Maria de Besora',
		'Santa Maria de Corcó',
		'Seva',
		'Sobremunt',
		'Sora',
		'Taradell',
		'Tavèrnoles',
		'Tavertet',
		'Tona',
		'Torelló',
		'Vic',
		'Vidrà',
		'Viladrau',
		'Vilanova de Sau',
		'Cantonigròs'
	);
?>
<!doctype html>
<html>
<head>
	<meta charset="utf8"/>
</head>
<body>
<div>

	<p>
	<?php
		foreach ($municipis as $municipi) {
			echo "<li>$municipi</li>";
		}
	?>
	</p>


</body>
</html>