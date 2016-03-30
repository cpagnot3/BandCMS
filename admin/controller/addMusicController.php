<?php 
	require(dirname(__FILE__).'/../../Global/Repository/MusicRepository.php');

	$title 		= $_POST['title'];
	$artist 	= $_POST['artist'];
	$album		= $_POST['album'];
	$releaseDate= $_POST['release-date'];
	//$file		= $_FILES;
	$action 	= $_POST['action'];
	$redirect 	= $_POST['redirect'];

	// check empty file input
	/*
	if(($_FILES['file']['size'] == 0 && $_FILES['file']['error'] == 0)) {
		return "no file";
		exit();
	}
	*/

	//upload staff

	$extensions = array('.mp3', '.wav');
	$extension = strrchr($_FILES['file']['name'], '.');

	if(!in_array($extension, $extensions)) {
		return "wrong extension";
	}

	$uploaddir = '/../../global/files/music/';
	$uploadfile = $uploaddir . basename($_FILES['file']['name']);

	$writable = is_writable($uploadfile);
	move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile);


	$show = new Music();
	$show->setTitle($title);
	$show->setArtist($artist);
	$show->setAlbum($album);                           
	$show->setReleaseDate($releaseDate);
	$show->setPath($uploadfile);



	$musicRepository = new MusicRepository();
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

?>