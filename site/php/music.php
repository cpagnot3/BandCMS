<!DOCTYPE html>
<html>
<head>
<title>Music</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="../test.css">
<link rel="stylesheet" type="text/css" href="../css/global.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>


<body>
	<?php
		require(dirname(__FILE__).'/../../global/Repository/MusicRepository.php');
	?>
<?php include('header.php'); ?> 
	<main class="container">
	<h1>Liste des musiques</h1>	
	<?php
	$MusicRepository = new MusicRepository();
	if(!isset($_GET['id'])){		
		foreach ($MusicRepository->getListMusic(10) as $music) {
			echo '  <article>
						<h2>'.$music->getTitle().'</h2>
					  	<p>'.$music->getArtist().'</p>
					  	<p>'.$music->getAlbum().'</p>
					  	<file src="'.$music->getPath().'">
					  	<p>'.$music->getReleaseDate().'<br/></p>
					</article>	  
				  ';
				}
		}else{
			$music = $MusicRepository->getMusicById($_GET['id']);
			echo '  <article>
						<h2>'.$music->getTitle().'</h2>
					  	<p>'.$music->getArtist().'</p>
					  	<file src="'.$music->getPath().'">
					  	<p>'.$music->getReleaseDate().'<br/></p>
					</article>	  
			';
		}
	
	?>	
<?php include('footer.php'); ?> 
