<?php 
	require(dirname(__FILE__).'/../../Global/Repository/UserRepository.php');

	if(isset($_GET['id'])){		
		$id_user= $_GET['id'];
		$redirect 	= $_POST['redirect'];			
		try{
			$userRepository = new UserRepository();
			$data = $userRepository->deleteUser($id_user);			
			header('Location: '.$redirect.'?d');
		}catch(Exception $e){
			echo 'ERROR : '.$e;
		}
	}else{

	}
?>
