<?php
print_r($_REQUEST);
session_start();

	$productes= array(
		array('nom'=>'Disc dur extern Adata 500GB', 'preu'=>59.9),
		array('nom'=>'Disc dur extern Adata 1TB', 'preu'=>89.9),
		array('nom'=>'Western Digital MyBook 3TB', 'preu'=>149.9),
		array('nom'=>'Disc dur extern WD 1TB', 'preu'=>89.9),
		array('nom'=>'Reproductor Multimedia Approx', 'preu'=>56),
		array('nom'=>'Sintonitzador TDT HD NPG', 'preu'=>34.9),
		array('nom'=>'Sintonitzador TDT Dual BB', 'preu'=>54.9),
		array('nom'=>'Smart TV PRIMUX', 'preu'=>89)
	);

// obtenim les dades del formulari
$producte = isset($_REQUEST['producte'])? $_REQUEST['producte'] : -1;
$qtt = isset($_REQUEST['quantitat'])? $_REQUEST['quantitat'] : 0;

if (isset($_REQUEST['buidar'])) {
  session_destroy();
  session_start();
}

if ($producte>=0 && $producte<count($productes) && $qtt>0) {
  if (isset($_SESSION['carro'][$producte])) {
    $_SESSION['carro'][$producte] += $qtt;
  } else{
    $_SESSION['carro'][$producte] = $qtt;
  }
}


?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <style>
    label, select, option {font-size: 1.5em}
    input { font-size: 1em}
    table { border-collapse: collapse; border: 1px solid grey;}
    th, td { text-align: left; padding: 8px; }
    tr:nth-child(even){background-color: #f2f2f2}
    th { background-color: #4CAF50; color: white; }
    input[type=submit] {background-color: #4CAF50;color: white;padding: 14px 20px;margin: 8px 0;border: none;border-radius: 4px;cursor: pointer;}
    input[type=number] {width: 50px;}
  </style>
</head>
<body>
  <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
  <input type="hidden" name="producteComprat[]" value=5>
  <input type="hidden" name="producteComprat[]" value=3>

    <div>
      <h1>Botiga Virtual</h1>
      <label>
      <span>Producte</span>
        <select id="producte" name="producte">
          <option value="-1">Escull un producte</option>
          <?php 
          forEach($productes as $i => $p) { ?>
          <option value="<?=$i?>"><?=$p['nom']?> ( <?=$p['preu']?> € )</option>
          <?php
          }
          ?>
        </select>
      </label>
      <label>
        <span>Quantitat</span><input id="quantitat" type="text" name="quantitat" value="1" />
      </label>

      <input class="button" type="submit" value="Enviar" />
      <input class="button" type="submit" name="buidar" value="Buidar" />
    </div>
  </form>
<?php

  if (isset($_SESSION['carro'])) { ?>

    <table>
      <tr><th>Article</th><th>Quantitat</th><th>Preu Unitari</th><th>Preu</th></tr>

      <?php
        foreach ($_SESSION['carro'] as $codiProd => $qttProd) { ?>
        <tr>
          <td> <?= $productes[$codiProd]['nom'] ?> </td>
          <td> <?= $qttProd ?> </td>
          <td> <?= $productes[$codiProd]['preu'] ?>€ </td>
          <td> <?= $productes[$codiProd]['preu'] * $qttProd ?> €</td>
        </tr>

      <?php
        }
      ?>

  </table>
<?php
  }
?>
</body>
</html>