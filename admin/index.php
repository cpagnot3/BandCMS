<?php
if(isset($_COOKIE['pseudo'])){ 	
	if((isset( $_COOKIE[ crypt( $_COOKIE["pseudo"] , $_COOKIE["pseudo"] ) ] ) )){
		header('Location: view/admin.php');
	}
}else{
	include('form/connectForm.php');
}
?>