<?php
	require(dirname(__FILE__).'/../../Global/Repository/UserRepository.php');
	$redirect 	= $_GET['r'];
	$id 		= $_GET['id'];
	try{
		$userRepository = new UserRepository();
		$userRepository->changeSuperUser($id);
		header('Location: '.$redirect);
	}catch(Exception $e){
		echo 'ERROR :'.$e;
	}
?>