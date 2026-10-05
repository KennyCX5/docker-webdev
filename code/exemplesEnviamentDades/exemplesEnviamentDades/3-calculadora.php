
<?php
 //  comprovem i recollim les dades rebudes



?>

<!DOCTYPE html>

<head>
	<title>Exemple PHP</title>
</head>


<body>
    <div id="page-wrap">
	  <h1>Calculadora</h1>
	  <form action="" method="post" id="calc">
            <p>
                <input type="number" name="first_num" required="required"  />
                <b>First Number</b>
            </p>
            <p>
                <input type="number" name="second_num" required="required" />
                <b>Second Number</b>
            </p>
            <p>
                <input readonly="readonly" name="result"  /> <b>Result</b>
            </p>
            <input type="submit" name="operator" value="Sum" />
            <input type="submit" name="operator" value="Dif" />
            <input type="submit" name="operator" value="Mult" />
            <input type="submit" name="operator" value="Div" />
	  </form>
    </div>
</body>
</html>