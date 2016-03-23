<?php
	require(dirname(__FILE__).'/../../Global/Repository/UserRepository.php');

	$pseudo 			= $_POST['pseudo'];
	$password 			= $_POST['password'];
	$passwordConfirm 	= $_POST['confirmPassword'];
	$redirect 			= $_POST['redirect'];

	if($password!=$passwordConfirm){
		header('Location: '.$redirect.'?p');
	}

	$user = new User();
	$user->setPseudo($pseudo);
	$user->setPassword(crypt($password, $password));
	$userRepository = new UserRepository();
	$newUser = $userRepository->addUser($user);
	if($newUser){
		echo 'créer';
	}else{
		header('Location: '.$redirect.'?u');
	}


?>