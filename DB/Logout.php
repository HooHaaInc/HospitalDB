<?php
session_start();
if(session_destroy()){ // Destroying All Sessions
	header("Location: ../pages/login.php"); // Redirecting To Home Page
}
?>