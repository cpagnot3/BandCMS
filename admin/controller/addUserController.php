<?php
	require(dirname(__FILE__).'/../../Global/Repository/UserRepository.php');

	$pseudo 			= $_POST['pseudo'];
	$password 			= $_POST['password'];
	$passwordConfirm 	= $_POST['confirmPassword'];
	$redirect 			= $_POST['redirect'];
	$superuser 			= isset($_POST['superuser']);
	

	$user = new User();
	$user->setPseudo($pseudo);
	$user->setPassword(crypt($password, $password));
	$user->setSuperUser($superuser);
	$userRepository = new UserRepository();
	$newUser = $userRepository->addUser($user);
	if($newUser){
		header('Location: '.$redirect);
	}else{
		header('Location: '.$redirect.'?u');
	}


?>