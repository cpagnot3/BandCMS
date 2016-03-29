<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="/BandCMS/admin/assets/js/checkboxSuperAdmin.js"></script>	

</head>
<body>
	<?php

		require(dirname(__FILE__).'/../../Global/Repository/UserRepository.php');
		$userRepository = new UserRepository();
		$listUser = $userRepository->getListUser();

		foreach ($listUser as $user) {
			if($user->getPseudo()==$_COOKIE['pseudo']){
				$superUser = $user->getSuperUser();
			}
		}

		if(!$superUser){
			echo '<ul>';
			foreach ($listUser as $user) {
				echo '
				<li>'.$user->getPseudo().'</li>';			

			}
			echo '</ul>';
		}elseif ($superUser) {
			echo '<ul>';
			foreach ($listUser as $user) {
				if($user->getPseudo()!=$_COOKIE['pseudo']){
					if($user->getSuperUser()){$checked='checked';}else{$checked='';}
					echo '
					<form method="post" action="../controller/deleteUserController.php?id='.$user->getId().'">
						<input id="redirect'.$user->getId().'" style="visibility:hidden;display:none;" type="text" name="redirect" value= "http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'].'" >
						<li><input type="submit" value="X"></input> '.$user->getPseudo().' - SuperUser : <input type="checkbox" name="superuser" value="'.$user->getId().'" '.$checked.' ></li>
					</form>';
					
				}				

			}
			echo '</ul>';
		}

	?>

</body>