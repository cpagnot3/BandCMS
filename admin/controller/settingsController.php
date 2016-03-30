<?php 
	require(dirname(__FILE__).'/../../global/Repository/SettingsRepository.php');

	$name 		= $_POST['site-name'];
	$slogan 	= $_POST['slogan'];
	$redirect 	= $_POST['redirect'];

	//upload stuff
	$extensions = array('.png', '.jpg', '.jpeg');
	$extension = strrchr($_FILES['logo']['name'], '.');

	/*
	if(!in_array($extension, $extensions)) {
		return "wrong extension";
	}
	*/

	$uploaddir = '/../../global/files/logo/';
	$uploadfile = $uploaddir . basename($_FILES['logo']['name']);

	$writable = is_writable($uploadfile);
	move_uploaded_file($_FILES['logo']['tmp_name'], $uploadfile);
	

	try{
		$settings = new Settings();
		$settings->setName($name);
		$settings->setSlogan($slogan);
		$settings->setLogo($uploadfile);

		$settingsRepository = new SettingsRepository();

		$data = $settingsRepository->updateSettings($settings);	
		header('Location: '.$redirect.'?e');

	}catch(Exception $e){
		echo 'ERROR : '.$e;
	} 

?>