<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Potències</title>
    <style>
        table {
            border-collapse: collapse;
            margin-top: 5px;
        }

        td {
            border-width: 1px;
            border-style: solid;
            border-color: #333333;
            padding: 8px;
            font-size: 1.2em;
            width: 200px;
        }

        tr:nth-child(odd) td {
            background-color: #add8e6;
        }

        tr:nth-child(even) td {
            background-color: #ffcccb;
        }
    </style>
</head>

<body>
    <?php
    $valor = @$_GET['valor'];
    ?>
    <h1>Potències</h1>
    <form action method="get">
        <input type="number" name="valor" value="<?= $valor ?>">
    </form>

    <?php if ($valor !== '') { ?>
        <table>
            <?php for ($i = 1; $i <= 10; $i++) { ?>
                <tr>
                    <td><?= $valor ?>
                        <sup><?=$i ?></sup> = <?= pow($valor, $i) ?>
                    </td>
                </tr>
            <?php } ?>
        </table>
    <?php } ?>
</body>

</html>