<?php 
	if(!(isset($_COOKIE['pseudo']))){
		header('Location: ../index.php');
		if(!(isset( $_COOKIE[ crypt( $_COOKIE["pseudo"] , $_COOKIE["pseudo"] ) ] ) ) ){
			header('Location: ../index.php');
		}
	}
?>