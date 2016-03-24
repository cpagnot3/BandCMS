<?php 
	require(dirname(__FILE__).'/../../Global/Repository/ConcertRepository.php');

	if(isset($_GET['id'])){		
		$id_concert = $_GET['id'];
		$redirect 	= $_POST['redirect'];			
		try{

			$ConcertRepository = new ConcertRepository();
			$data = $ConcertRepository->deleteConcert($id_concert);			
			header('Location: '.$redirect.'?d');
		}catch(Exception $e){
			echo 'ERROR : '.$e;
		}
	}else{

	}
?>