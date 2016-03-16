<?php 
	require(dirname(__FILE__).'/../../Global/Repository/ConcertRepository.php');

	$redirect 	= $_POST['redirect'];
	$date 		= $_POST['dateConcert'];
	$place		= $_POST['place'];
	$city		= $_POST['city'];
	$country	= $_POST['country'];
	$billeterie = $_POST['billeterie'];

	$show = new Concert();
	$show->setDateConcert($date);
	$show->setPlace($place);
	$show->setCity($city);
	$show->setCountry($country);
	$show->setBilleterie($billeterie);

	$ConcertRepository = new ConcertRepository();
	$newShow = $ConcertRepository->addConcert($show);
	header('Location: '.$redirect.'?t'); 


?>