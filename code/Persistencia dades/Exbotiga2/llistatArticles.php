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
            $id_prod = (int)$_POST['eliminar'];
            unset($_SESSION['carro'][$id_prod]);
        }
        if (isset($_POST['enviar']) && $_POST['enviar'] === 'Afegir al carro' && isset($_POST['quantitat'])) {
            foreach ($_POST['quantitat'] as $id_prod => $quantitat_prod) {
                $id_prod = (int)$id_prod;
                $quantitat_prod = (int)$quantitat_prod;
                if ($quantitat_prod > 0 && isset($productes[$id_prod])) {
                    if (isset($_SESSION['carro'][$id_prod])) {
                        $_SESSION['carro'][$id_prod] += $quantitat_prod;
                    } else {
                        $_SESSION['carro'][$id_prod] = $quantitat_prod;
                    }
                }
            }
        }

        header('Location: ' . $_SERVER['PHP_SELF']);
        exit;
    }

    $cistella = $_SESSION['carro'];
    $total_cistella = 0;
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

                <?php if (count($cistella) > 0) { ?>
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
                        <?php foreach ($cistella as $index_prod => $quantitat_prod) {
                            $article = $productes[$index_prod];
                            $subtotal = $quantitat_prod * (float)$article['preuOferta'];
                            $total_cistella += $subtotal;
                        ?>
                        <tr>
                            <td class='cNum'><?=$quantitat_prod?></td>
                            <td><?=$article['descripcio']?></td>
                            <td class='cNum'><?=number_format((float)$article['preuOferta'], 2, '.', '')?>€</td>
                            <td class='cNum'><?=number_format($subtotal, 2, '.', '')?>€</td>
                            <td><button type='submit' name="eliminar" value="<?=$index_prod?>">Eliminar</button></td>
                        </tr>
                        <?php } ?>
                    </table>
                </div>
                <input type="submit" name="enviar" value="Comprar" />
                <?php } ?>

                <div id="caixaLlistat">
                    <input type="submit" name="enviar" value="Afegir al carro" />
                    <ul>

                        <?php foreach ($productes as $index_prod => $article) { ?>
                        <li>
                            <img src="imatges/<?=$article['imatge']?>" height="150" width="150" />
                            <span class="etiqDescompte"><?=$article['descompte']?>%</span>
                            <div id="caixaNomP">
                                <span class="nom"><?=$article['descripcio']?></span><br />
                                <span class="marca"><?=$article['marca']?></span><br />
                            </div>
                            <div id="caixaPreuP">
                                <span class="preu_oferta">En Oferta: <b><?=$article['preuOferta']?>€</b></span><br />
                                <span class="preu_anterior">Abans: <?=$article['preuAbans']?>€</span>
                                <span class="amb_iva">(IVA inclòs)</span><br />
                            </div>
                            Quantitat: <input type="number" size="2" name="quantitat[<?=$index_prod?>]" value="0" min="0" />
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