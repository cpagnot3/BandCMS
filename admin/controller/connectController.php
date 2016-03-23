<?php 
	require(dirname(__FILE__).'/../../Global/Repository/UserRepository.php');

	$pseudo = $_POST['pseudo'];
	$password = $_POST['password'];
	$redirect = $_POST['redirect'];

	try{
		$user = new User();	
		$user->setPseudo($pseudo);
		$user->setPassword(crypt($password, $password),true);
		$userRepository = new UserRepository();		
		$connect = $userRepository->connect($user);
		if($connect)
		{
			setcookie(crypt($pseudo,$pseudo), true, time()+3600,"/");
			setcookie('pseudo', $pseudo, time()+3600,"/");
			header('Location: http://'.$_SERVER['HTTP_HOST'].'/BandCMS/admin/view/admin.php');
		}else{
			header('Location: '.$redirect.'?e');

		}

	}catch(Exception $e){
		echo 'ERROR : '.$e;
	}

?>