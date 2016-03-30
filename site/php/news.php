<!DOCTYPE html>
<html>
<head>
<title>News</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="../test.css">
<link rel="stylesheet" type="text/css" href="../css/global.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
	<?php
		require(dirname(__FILE__).'/../../global/Repository/NewsRepository.php');
		include('header.php')
	?>
	
	<?php
	$newsRepository = new NewsRepository();
	if(!isset($_GET['id'])){		
		foreach ($newsRepository->getListNews(10) as $news) {
			echo '  
					<h1>Liste des news</h1>	
					<article>
						<h2>'.$news->getTitle().'</h2>
					  	<p>'.$news->getDate().'</p>
					  	<img src="'.$news->getImage().'">
					  	<p>'.$news->getChapo().'<br/><a href="news.php?id='.$news->getId().'">Lire la news</a></p>
					</article>	  
				  ';
				}
		}else{
			$news = $newsRepository->getNewsById($_GET['id']);
			echo '  <article>
						<h2>'.$news->getTitle().'</h2>
					  	<p>'.$news->getDate().'</p>					  	
					  	<p>'.$news->getChapo().'</p>
					  	<img src="'.$news->getImage().'">
					    <div class="contenu">'.$news->getTexte().'
					    </div>
					</article>	  
			';
		}
	
	?>	
<?php include('footer.php'); ?> 
