<!DOCTYPE html>
<html>
<head>
<title>Title of the document</title>
</head>

<body>
	<?php
		require(dirname(__FILE__).'/../../global/Repository/NewsRepository.php');
	?>
	<h1>Liste des news</h1>	
	<?php
	$newsRepository = new NewsRepository();
	if(!isset($_GET['id'])){		
		foreach ($newsRepository->getListNews(10) as $news) {
			echo '  <article>
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
					    <div class="contenu>'.$news->getTexte().'
					    </div>
					</article>	  
			';
		}
	
	?>	
</body>

</html>
