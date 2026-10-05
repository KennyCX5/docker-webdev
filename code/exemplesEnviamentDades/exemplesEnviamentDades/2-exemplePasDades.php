<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        form, form select{font-size: 1.5em;}
    </style>
</head>
<body>
    <h1>Exemple pas de dades</h1>
    <form action="" method="GET" >
        Nom: <input type="text" name="nom" />
        Cognom: <input type="text" name="cognom" /><br>
        Sexe:
        Home <input type="radio" name="sexe" value="h">
        Dona <input type="radio" name="sexe" value="d"><br>
        Vols rebre informació <input name="info" type="checkbox"><br>
        Continent: <select name="regio">
                <option value="0">Escull una regió</option>
                <option value="eu">Europa</option>
                <option value="af">Africa</option>
        </select><br/>
        Esports:<br/>
            <input type="checkbox" name="esports[]" value="paddle">paddle
            <input type="checkbox" name="esports[]" value="btt">btt
            <input type="checkbox" name="esports[]" value="esqui">esqui
            <input type="checkbox" name="esports[]" value="spinning">spinning
        <input type="submit" value="Enviar" name="Boto">
    </form>


</body>
</html>