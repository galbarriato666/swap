Un formulario en PHP es un medio que permite a los usuarios enviar datos al servidor para su procesamiento. En este tutorial, vamos a ver cómo crear un formulario básico en PHP y algunos trozos de código que puedes copiar y adaptar para tus necesidades.

Creación de un formulario básico
Para crear un formulario básico en PHP, necesitamos definir los elementos del formulario. Los elementos más comunes son:

<input>: Un campo de entrada que puede ser de diferentes tipos, como texto, número, fecha, checkbox, etc.
<textarea>: Un campo de entrada para texto que admite varias líneas.
<select>: Un campo de selección que permite al usuario elegir una opción de una lista desplegable.
<button>: Un botón que se puede hacer clic para enviar el formulario o realizar otras acciones.
Aquí hay un ejemplo de formulario básico que utiliza algunos de estos elementos:

html
Copy code
<!DOCTYPE html>
<html>
<head>
	<title>Formulario de contacto</title>
</head>
<body>
	<h1>Formulario de contacto</h1>
	<form method="post" action="enviar.php">
		<label>Nombre:</label>
		<input type="text" name="nombre"><br><br>

		<label>Correo electrónico:</label>
		<input type="email" name="email"><br><br>

		<label>Mensaje:</label>
		<textarea name="mensaje"></textarea><br><br>

		<button type="submit">Enviar</button>
	</form>
</body>
</html>
Este formulario contiene tres campos de entrada: nombre, correo electrónico y mensaje. También tiene un botón de envío que enviará los datos del formulario a un archivo PHP llamado enviar.php.

Recuperación de datos del formulario
Para recuperar los datos del formulario en PHP, podemos usar la variable superglobal $_POST. Esta variable es un array asociativo que contiene los valores enviados desde el formulario.

Aquí hay un ejemplo de cómo recuperar los valores del formulario anterior:

php
Copy code
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$nombre = $_POST['nombre'];
	$email = $_POST['email'];
	$mensaje = $_POST['mensaje'];

	// Procesamiento de datos del formulario
}
?>
En este ejemplo, primero verificamos si el formulario ha sido enviado utilizando el método $_SERVER['REQUEST_METHOD']. Si el formulario ha sido enviado, podemos recuperar los valores del formulario del array $_POST y asignarlos a variables locales para su procesamiento posterior.

Validación de datos del formulario
La validación de datos del formulario es importante para garantizar que los datos enviados sean válidos y seguros antes de procesarlos en el servidor. Podemos usar funciones de validación de PHP para validar los datos del formulario.

Aquí hay un ejemplo de cómo validar el correo electrónico en el formulario anterior:


<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$nombre = $_POST['nombre'];
	$email = $_POST['email'];
	$mensaje = $_POST['mensaje'];

	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		echo "El correo electrónico no es válido";
	} else {
		// Procesamiento de datos del formulario
	}
}
?>
En este ejemplo, usamos la función filter_var() para validar el correo electrónico. Si el correo electrónico no es válido, mostramos un mensaje de error en la pantalla. De lo contrario, podemos continuar procesando los datos del formulario. 
