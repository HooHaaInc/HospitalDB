<?php
	require_once('connect.php');
	$conn = dbConnect();	
	session_start();//iniciamos sesion
	if(isset($_POST['usuario']) && isset($_POST['password'])){
		$usuario = $_POST['usuario'];
		$password = $_POST['password'];
		
		$query = "select * from usuario where nombre = '".$usuario."' and pasw = '".$password."'";
		$result = mysqli_query($conn, $query);
		$nregistros = $result->num_rows;
		if($nregistros>0){
			
			$_SESSION['user'] = $usuario;
			$user = $_SESSION['user'];
			echo $user;
			header('location:../pages/index.php');
			//echo '<script>window.location.href="../pages/index.php"</script>';
			
		}else{
			echo '<script language = javascript>
				alert("Los datos son incorrectos. Vuelva a intentarlo")
				self.location = "../pages/login.php"
				</script>';
		}
	}				
?>