 <?php
 include ("conexion.php");
 if (isset($_POST['REGISTER'])) {
 	if (
     strlen($_POST['name']) >= 1 &&
     strlen($_POST['direction']) >= 1 &&
     strlen($_POST['email']) >= 1 &&
     strlen($_POST['ph']) >= 1 &&
     strlen($_POST['pw']) >= 1 


 	) {
 		$name   = trim($_POST['name']);
 		$direction  = trim($_POST['name']);
 		$email   = trim($_POST['name']);
 		$ph   = trim($_POST['name']);
 		$pw   = trim($_POST['name']);
 		$date = date("d/m/y");
 		$consulta = "INSERT INTO datos(nombre, direccion, email, télefono, contraseña, fecha)
 		VALUES('$name', '$direction','$email', '$ph', '$pw', '$fecha')";
 		$resultado = mysqli_query($conex, $consulta);
 		if ($resultado) {
 			echo "<script>alert('Algo salio mal, reintenta';</script>";
 		} else{
 			echo"<script>alert('Tu registro no se completó, intenta de nuevo');</scrípt>";
 		}
 		// code...
 	}
 ?>