<?php 
	require(dirname(__FILE__).'/../../Global/Repository/SettingsRepository.php');

	$name 		= $_POST['site-name'];
	$slogan 	= $_POST['slogan'];
	$redirect 	= $_POST['redirect'];

	// check empty file input
	/*
	if(($_FILES['file']['size'] == 0 && $_FILES['file']['error'] == 0)) {
		return "no file";
		exit();
	}
	*/

	//upload staff

	/*
	$extensions = array('.png', '.jpg', '.jpeg');
	$extension = strrchr($_FILES['logo']['name'], '.');

	if(!in_array($extension, $extensions)) {
		return "wrong extension";
	}

	$uploaddir = '/../../global/files/logo/';
	$uploadfile = $uploaddir . basename($_FILES['logo']['name']);

	$writable = is_writable($uploadfile);
	move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile);
	*/

	$show = new Settings();
	$show->setName($name);
	$show->setSlogan($slogan);

	$settingsRepository = new SettingsRepository();
	
	$newSettings = $settingsRepository->updateSettings($show);

	header('Location: '.$redirect.'?a'); 
	/*
	if($action=='Add'){
		try{			
			$newShow = $musicRepository->addMusic($show);
			echo "writable dir ?";
			var_dump($writable);
			var_dump($uploadfile);
			//header('Location: '.$redirect.'?a'); 
		}catch(Exception $e){
			echo 'ERROR : '.$e;
		}
	}elseif ($action=='Edit'){
		try{			
			$id=$_POST['id'];
			$editShow = $musicRepository->editMusic($id, $show);
			header('Location: ../form/addMusicForm.php'); 
		}catch(Exception $e){
			echo 'ERROR : '.$e;
		}
	}
	*/

?>