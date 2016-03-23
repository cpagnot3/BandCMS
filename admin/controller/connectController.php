<?php 
	require(dirname(__FILE__).'/../../Global/Repository/UserRepository.php');

	$pseudo = $_POST['pseudo'];
	$password = $_POST['password'];
	$redirect = $_POST['redirect'];

	try{
		$user = new User();
		$user->setPseudo($pseudo);
		$user->setPassword(crypt($password, $password));
		$userRepository = new UserRepository();		
		$connect = $userRepository->connect($user);
		if($connect)
		{
			$_SESSION['pseudo'] = $pseudo;
		    $_SESSION['acces'] = true;
		}else{
			header('Location: '.$redirect.'?e');

		}

	}catch(Exception $e){
		echo 'ERROR : '.$e;
	}

?>