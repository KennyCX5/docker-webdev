
<?php 
    $canvi=[
        'USD'=>['Dòlar USA', 1.12488],
        'EUR'=>['Euro', 1],
        'GBP'=>['Lliura Gran Bretanya', 0.73831],
        'AUD'=>['Dòlar Australià', 1.58987],
        'CAD'=>['Dòlar Cadanenc', 1.47579],
        'JPY'=>['Yen Japonès', 135.122],
    ];

        if(isset($_GET['qtt'])) {
            $qtt = $_GET['qtt'];
        }else{
            $qtt = 0;
        }

        if(isset($_GET['moneda'])) {
            $moneda = $_GET['moneda'];
        }else{
            $moneda = "EUR";
        }
        

        

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
	<body>
	<h2>Canvi moneda</h2>
	<h3>
        <?=$qtt?>EUR = <?=$qtt*$canvi[$moneda][1]?> <?=$canvi[$moneda][0]?>
    </h3><br/><br/>   
    <form action="canvisdivises.php" method="GET">
    Quantitat a convertir: <input type="text" name="qtt" value="<?=$qtt?>">
    Moneda: <select name="moneda">
            <?php
                foreach($canvi as $sigla => $info){?>
                    <option value='<?= $sigla ?>' <?= ($sigla == $moneda ? "selected" : "") ?>><?= $info[0] ?></option>
            
               <?php } ?>

                </select>
        <input type="submit" name="Convertir">
    </form>
	</body>
</html>