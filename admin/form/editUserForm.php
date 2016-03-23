 <head>

</head>
<body>
	<?php 
		require(dirname(__FILE__).'/../../Global/Repository/UserRepository.php');
		$userRepository = new UserRepository();
		$listUser = $userRepository->getListUser();
		echo '<ul>';
		foreach ($listUser as $user) {
			echo '
			<li>'.$user->getPseudo().'</li>';		
			

		}
		echo '</ul>';

	?>

</body>