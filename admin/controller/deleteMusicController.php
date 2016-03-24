<?php 
	require(dirname(__FILE__).'/../../Global/Repository/MusicRepository.php');

	if(isset($_GET['id'])){		
		$id_music = $_GET['id'];
		$redirect 	= $_POST['redirect'];			
		try{

			$musicRepository = new MusicRepository();
			$data = $musicRepository->deleteMusic($id_music);			
			header('Location: '.$redirect.'?d');
		}catch(Exception $e){
			echo 'ERROR : '.$e;
		}
	}else{

	}
?>