<?php 
	require(dirname(__FILE__).'/../../Global/Repository/MusicRepository.php');

	$title 		= $_POST['title'];
	$artist 	= $_POST['artist'];
	$album		= $_POST['album'];
	$releaseDate= $_POST['release-date'];
	$file		= $_FILES;
	$action 	= $_POST['action'];
	$redirect 	= $_POST['redirect'];

	$uploaddir = '/../../Global/Files/music/';
	$uploadfile = $uploaddir . basename($_FILES['file']['name']);

	$show = new Music();
	$show->setTitle($title);
	$show->setArtist($artist);
	$show->setAlbum($album);
	$show->setReleaseDate($releaseDate);
	//file path and upload
	$show->setPath($uploadfile);
	move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile);

	$musicRepository = new MusicRepository();
	if($action=='Add'){
		try{			
			$newShow = $musicRepository->addMusic($show);
			header('Location: '.$redirect.'?a'); 
		}catch(Exception $e){
			echo 'ERROR : '.$e;
		}
	}elseif ($action=='Edit'){
		try{			
			$id=$_POST['id'];
			$editShow = $musicRepository->editMusic($id,$show);
			header('Location: ../form/editConcertForm.php'); 
		}catch(Exception $e){
			echo 'ERROR : '.$e;
		}
	}

?>