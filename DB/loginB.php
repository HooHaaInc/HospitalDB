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
			?>
			<script language="javascript">
    		window.location.href = "../pages/index.html"
		</script>
		
		<?php
		}
	}				
?>