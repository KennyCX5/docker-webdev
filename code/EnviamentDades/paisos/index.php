<?php
    $paisos=[
        "ALA"=>"Åland Islands",
        "AUT"=>"Austria",
        "BEL"=>"Belgium",
        "BGR"=>"Bulgaria",
        "HRV"=>"Croatia",
        "CYP"=>"Cyprus",
        "CZE"=>"Czech Republic",
        "DNK"=>"Denmark",
        "EST"=>"Estonia",
        "FRO"=>"Faroe Islands",
        "FIN"=>"Finland",
        "FRA"=>"France",
        "GUF"=>"French Guiana",
        "DEU"=>"Germany",
        "GIB"=>"Gibraltar",
        "GRC"=>"Greece",
        "HUN"=>"Hungary",
        "IRL"=>"Ireland",
        "IMN"=>"Isle of Man",
        "ITA"=>"Italy",
        "LVA"=>"Latvia",
        "LTU"=>"Lithuania",
        "LUX"=>"Luxembourg",
        "MLT"=>"Malta",
        "NLD"=>"Netherlands",
        "POL"=>"Poland",
        "PRT"=>"Portugal",
        "ROU"=>"Romania",
        "SVK"=>"Slovakia",
        "SVN"=>"Slovenia",
        "ESP"=>"Spain",
        "SWE"=>"Sweden",
        "GBR"=>"United Kingdom",
    ]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="estils.css"/>
    <title>Document</title>
</head>
<body>
    <form action="resposta.php" method="get">
	<div>
		<h1>Escollir el país</h1>
		<label>
        <span>País</span>
        <select name="codiPais" id="codiPais">
            <?php
                foreach($paisos as $codi => $nom){?>
                    <option value='<?= $codi ?>'><?= $nom ?></option>
            
               <?php } ?>
            
        </select>
		</label>
		<input class="button" type="submit" value="Enviar" />
		</label>
	</div>
	</form>
</body>
</html>
