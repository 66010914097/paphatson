<?php
	session_start();
	
	unset( $_SESSION['name'] );
	unset( $_SESSION['nickname'] );
	
	echo"<script>";
	echo"window.location='index.php';";
	echo"</script>";	
?>