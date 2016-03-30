<?php 
	require(dirname(__FILE__).'/../../Global/Repository/NewsRepository.php');

	if(isset($_GET['id'])){		
		$id_news = $_GET['id'];		
		try{

			$newsRepository = new NewsRepository();
			$data = $newsRepository->deleteNews($id_news);			
			header('Location: ../view/news.php');
		}catch(Exception $e){
			echo 'ERROR : '.$e;
		}
	}else{

	}
?>