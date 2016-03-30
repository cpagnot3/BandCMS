<?php 
	require(dirname(__FILE__).'/../../Global/Repository/NewsRepository.php');

	$title = $_POST['title'];	
	$chapo = $_POST['chapo'];
	$texte = $_POST['text1'];
	$date  = new DateTime();	
	$date  = $date->format('d/m/Y H:i');
	$redirect = $_POST['redirect'];
	$action 	= $_POST['action'];

	$news = new News();
	$news->setTitle($title);
	$news->setChapo($chapo);
	$news->setDate($date);
	$news->setImage('o');
	$news->setTexte($texte);
	$newsRepository = new NewsRepository();
	if($action=='Add'){
		try{			
			$newNews = $newsRepository->addNews($news);
			header('Location: '.$redirect.'?t'); 
		}catch(Exception $e){
			echo 'ERROR : '.$e;
		}
	}elseif ($action=='Edit'){
		try{			
			$id=$_POST['id'];
			$editNews = $newsRepository->editNews($id,$news);
			header('Location: ../view/news.php?m');  
		}catch(Exception $e){
			echo 'ERROR : '.$e;
		}
	}
	
	
?>