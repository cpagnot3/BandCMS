<?php
	if(isset($_COOKIE['pseudo'])){
	 	setcookie(crypt($_COOKIE['pseudo'],$_COOKIE['pseudo']), true, time()-3600,"/");
		setcookie('pseudo', '', time()-3600,"/");
	}
	header('Location: ../');
?>