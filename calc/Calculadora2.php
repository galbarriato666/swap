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
			<select name="calcu"> 
				<option value="suma">Suma</option>
				<option value="resta">Resta</option>
				<option value="multiplicacio">Multiplicació</option>
				<option value="divisio">Divisió</option>
			</select>
            <input type="submit" value="Calcula"><br><br> 
        </form>
        
    <?php

        if (isset($_POST["num1"]) && isset($_POST["num2"])) { 
		if ($_POST["calcu"] == "suma") { 
			echo $_POST["num1"] . " + " . $_POST["num2"] . " = " . ($_POST["num1"] + $_POST["num2"]) . "<br>";
		}
		elseif ($_POST["calcu"] == "resta") { 
			echo $_POST["num1"] . " - " . $_POST["num2"] . " = " . ($_POST["num1"] - $_POST["num2"]) . "<br>";
		}
		elseif ($_POST["calcu"] == "multiplicacio") {
			echo $_POST["num1"] . " * " . $_POST["num2"] . " = " . ($_POST["num1"] * $_POST["num2"]) . "<br>";
		}
		elseif ($_POST["calcu"] == "divisio") {
			echo $_POST["num1"] . " / " . $_POST["num2"] . " = " . ($_POST["num1"] / $_POST["num2"]) . "<br>";
		}
	    }
	    else { 
		    echo "Introdueix dos números per a operar";
	    }
	?>
	</body>
</html>