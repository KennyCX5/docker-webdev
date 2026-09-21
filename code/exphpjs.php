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


</body>
</html>