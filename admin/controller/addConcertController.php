<?php 
	require(dirname(__FILE__).'/../../Global/Repository/ConcertRepository.php');

	$redirect 	= $_POST['redirect'];
	$date 		= $_POST['dateConcert'];
	$place		= $_POST['place'];
	$city		= $_POST['city'];
	$country	= $_POST['country'];
	$billeterie = $_POST['billeterie'];
	$action 	= $_POST['action'];

	$show = new Concert();
	$show->setDateConcert($date);
	$show->setPlace($place);
	$show->setCity($city);
	$show->setCountry($country);
	$show->setBilleterie($billeterie);
	$ConcertRepository = new ConcertRepository();
	if($action=='Add'){
		try{			
			$newShow = $ConcertRepository->addConcert($show);
			header('Location: '.$redirect.'?a'); 
		}catch(Exception $e){
			echo 'ERROR : '.$e;
		}
	}elseif ($action=='Edit'){
		try{			
			$id=$_POST['id'];
			$editShow = $ConcertRepository->editConcert($id,$show);
			header('Location: ../form/editConcertForm.php'); 
		}catch(Exception $e){
			echo 'ERROR : '.$e;
		}
	}

?>