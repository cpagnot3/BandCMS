<head>

</head>
	
<body>
	<?php
		require_once(dirname(__FILE__).'/../../global/Repository/NewsRepository.php');
	
		if(isset($_GET['d'])){
			echo '<div>News deleted !</div>';
		}
	
			$newsRepository = new NewsRepository();
		
		
		foreach ($newsRepository->getAllNews() as $news) {
			echo '
			<form method="post" action="../controller/deleteNewsController.php?id='.$news->getId().'">
				<input style="visibility:hidden;display:none;" type="text" name="redirect" value= "http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'].'" >
				<p><input type="submit" name="action" value="X"> - '.$news->getTitle().' - '.$news->getDate().' - <a href="news.php?id='.$news->getId().'">Edit</a></p>	
			</form>';
		}
	?>
</body>

