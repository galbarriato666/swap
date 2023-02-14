<!DOCTYPE html>
<html>
	<head>
		<title>La meva calculadora</title>
	</head>
	<body>
		<h1>La meva calculadora</h1>
		<form method="POST"> 
			<label>Número 1: <input type="number" name="num1"></label><br><br>
            <label>Número 2: <input type="number" name="num2"></label><br><br>
            <input type="submit" value="Calcula"><br><br> 
        </form>

    <?php 
        if (isset($_POST["num1"]) && isset($_POST["num2"])) { 
        echo $_POST["num1"] . " + " . $_POST["num2"] . " = " . ($_POST["num1"] + $_POST["num2"]) . "<br>";
        echo $_POST["num1"] . " - " . $_POST["num2"] . " = " . ($_POST["num1"] - $_POST["num2"]) . "<br>";
        echo $_POST["num1"] . " * " . $_POST["num2"] . " = " . ($_POST["num1"] * $_POST["num2"]) . "<br>";
        echo $_POST["num1"] . " / " . $_POST["num2"] . " = " . ($_POST["num1"] / $_POST["num2"]) . "<br>";
        }
        else { 
        echo "Introdueix dos números per a operar";
        }
    ?>
    </body>
</html>