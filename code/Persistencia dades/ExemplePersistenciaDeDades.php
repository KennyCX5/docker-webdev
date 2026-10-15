<?php
session_start();
$compt1 = isset($_SESSION['C1']) ? $_SESSION['C1'] : 0;
$compt2 = isset($_SESSION['C2']) ? $_SESSION['C2'] : 0;
$compt3 = isset($_SESSION['C3']) ? $_SESSION['C3'] : 0;
$compt4 = isset($_SESSION['C4']) ? $_SESSION['C4'] : 0;

if(isset($_REQUEST['botoCompt1'])) $compt1++;

if(isset($_REQUEST['botoCompt2']))$compt2++;

if(isset($_REQUEST['botoCompt3']))$compt3 ++;

if(isset($_REQUEST['botoCompt4']))$compt4 ++;


$_SESSION['C1'] = $compt1;
$_SESSION['C2'] = $compt2;
$_SESSION['C3'] = $compt3;
$_SESSION['C4'] = $compt4;

?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
</head>
<body>


	<form action="" method="get">
	<div>
		<h1>Comptadors</h1>
            <input class="button" type="submit" value="Reiniciar" name="reiniciar"/>		
		<table>
		    <tr>
		        <td align="center"><?= $compt1 ?></td>
		        <td align="center"><?= $compt2 ?></td>
		        <td align="center"><?= $compt3 ?></td>
		        <td align="center"><?= $compt4 ?></td>
		    </tr>
		    <tr>
		        <td>
		            <input class="button" type="submit" value="Comptador 1" name="botoCompt1"/>
		        </td>
		        <td>
              		<input class="button" type="submit" value="Comptador 2" name="botoCompt2"/>
		        </td>
		        <td>
                    <input class="button" type="submit" value="Comptador 3" name="botoCompt3"/>
		        </td>
		        <td>
		            <input class="button" type="submit" value="Comptador 4" name="botoCompt4"/>
		        </td>
		    </tr>
		</table>
	</div>
	</form>
</body>
</html>