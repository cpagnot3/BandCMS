<?php 
	
	if(!(isset( $_SESSION[ crypt( $_COOKIE["pseudo"] , $_COOKIE["pseudo"] ) ] ) ) ){
		header('Location: ../index.php');
	}
?>