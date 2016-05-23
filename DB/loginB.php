<?php
	require_once('connect.php');
	$conn = dbConnect();
	
	
	if(isset($_POST['usuario']) && isset($_POST['password'])){
		$usuario = $_POST['usuario'];
		$password = $_POST['password'];
		
		$query = "select * from usuario where nombre = '".$usuario."' and pasw = '".$password."'";
		$result = mysqli_query($conn, $query);
		$nregistros = $result->num_rows;
		if($nregistros>0){
			session_start();
			$_SESSION['usuario'] = $usuario;
			$user = $_SESSION['usuario'];
			echo '<script>window.location.href="../pages/index.html"</script>';
			
		}else{
			echo '<script language = javascript>
				alert("Los datos son incorrectos. Vuelva a intentarlo")
				self.location = "../pages/login.php"
				</script>';
		}
	}				
?>