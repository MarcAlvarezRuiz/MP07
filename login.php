<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1> Exemple de lectura de dades a MySQL </h1>
	
	<?php 
		echo "<form method='POST'>";
			echo "<label> User: </label>";
			echo "<input type='text' name='user'>";
			echo "<br>";
			echo "<label> Pass: </label>";
			echo "<input type='password' name='pass'>";
			echo "<br>";
			echo "<input type='submit' value='Tramet la consulta' name='enviar'>";
		echo "</form>";

		$user = $_POST["user"]; 
		$pass = $_POST["pass"]; 

		$conn = mysqli_connect('localhost','marc','marc123');

		mysqli_select_db($conn,'users');

		$consulta = "select * from datos where user='" .$user. "' and password = SHA2('marc123',512)";

		$resultat = mysqli_query($conn,$consulta);

		if($row = mysqli_fetch_array($resultat)){
			echo "hola";
		}
		

	?>
</body>
</html>