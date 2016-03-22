<?php 
	require(dirname(__FILE__).'/../../Global/Repository/NewsRepository.php');

	$title = $_POST['title'];	
	$chapo = $_POST['chapo'];
	$texte = $_POST['text1'];
	$date  = new DateTime();	
	$date  = $date->format('d/m/Y H:i');
	$redirect = $_POST['redirect'];

	$news = new News();
	$news->setTitle($title);
	$news->setChapo($chapo);
	$news->setDate($date);
	$news->setImage('o');
	$news->setTexte($texte);
	$newsRepository = new NewsRepository();
	$newNews = $newsRepository->addNews($news);
	header('Location: '.$redirect.'?id='.$newNews); 
	
?>