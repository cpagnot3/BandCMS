<?php 
	require(dirname(__FILE__).'/../../global/Repository/SettingsRepository.php');

	$name 		= $_POST['site-name'];
	$slogan 	= $_POST['slogan'];
	$redirect 	= $_POST['redirect'];

	//upload stuff
	$extensions = array('.png', '.jpg', '.jpeg');
	$extension = strrchr($_FILES['band-logo']['name'], '.');

	/*
	if(!in_array($extension, $extensions)) {
		return "wrong extension";
	}
	*/
	// Paths
	$uploaddir = '../../global/files/logo/';
	$uploadfile = $uploaddir . $_FILES['band-logo']['name'];

	
	
	// creating folder by php
	if ( !file_exists($uploaddir) ) {
	    $oldmask = umask(0);
	    mkdir ($uploaddir, 0744);
	}

	/*
	$realPath = realpath($uploaddir);
	$writable = is_writable($realPath);
	$writable2 = is_writable($uploaddir);
	*/


	try{
		move_uploaded_file($_FILES['band-logo']['tmp_name'], $uploadfile );

	}catch(Exception $e){
		echo 'ERROR : '.$e;
	} 
	

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