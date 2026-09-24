<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        avui és <script>
            
            var avui = new Date();
            document.write(avui.getDate() + "/" + (avui.getMonth() + 1) + "/" + avui.getFullYear());
        </script>
        i son les <script>
            var avui = new Date();
            document.write(avui.getHours() + ":" + avui.getMinutes() + ":" + avui.getSeconds());
            </script>
    </p>
    <br><br>
    <p>
        avui és <?php echo date("j/n/Y"); ?> i son les <?php echo date("H:i:s");?>


    </p>
    <?php 
    $d = intval(date("w"));
    $text = match($d){
        1,2,3,4 =>"La setmana es farà molt llarga",
        5 =>"S'acosta el cap de setmana",
        6,0 =>"Ja és cap de setmana",
        default =>"No sé quin dia és",
    };
    
    ?>
    <?= $text; ?>

    <br>
    <?php 
        $colors = ["vermell", "blau", "verd", "groc", "altres"];
        $favcolor = $colors[rand(0, 4)];
        switch($favcolor){
            case "vermell":
                echo "El meu color preferit és el vermell";
                break;
            case "blau":
                echo "El meu color preferit és el blau";
                break;
            case "verd":
                echo "El meu color preferit és el verd";
                break;
            case "groc":
                echo "El meu color preferit és el groc";
                break;
            default:
                echo "No tinc un color preferit";
        }
    ?>


<br>

<?php
$dies = ["dilluns", "dimarts", "dimecres", "dijous", "divendres", "dissabte", "diumenge"];
foreach($dies as $i => $dia){?>
  <?= $i ?> -> <?= $dia ?>
<?php }?>

<br>





</body>
</html>