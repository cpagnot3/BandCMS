<?php 
	require(dirname(__FILE__).'/../../Global/Repository/ContactRepository.php');

	$mail 		= $_POST['mail'];
	$name 		= $_POST['name'];
	$firstname 	= $_POST['firstname'];
	$fblink 	= $_POST['facebook'];
	$twlink 	= $_POST['twitter'];
	$ytlink 	= $_POST['youtube'];
	$redirect 	=$_POST['redirect'];
					
	try{
		$contact = new Contact();
		$contact->setMail($mail);
		$contact->setName($name);
		$contact->setFirstName($firstname);
		$contact->setFbLink($fblink);
		$contact->setTwLink($twlink);
		$contact->setYtLink($ytlink);
		$ContactRepository = new ContactRepository();		
		$data = $ContactRepository->editContact($contact);	
		header('Location: '.$redirect.'?e');
	}catch(Exception $e){
		echo 'ERROR : '.$e;
	}

	


	


?>