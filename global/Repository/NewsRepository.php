<?php 
require_once(dirname(__FILE__).'/../Object/news.php');
require_once(dirname(__FILE__).'/./DataManager.php');

class NewsRepository extends DataManager
{
	public function __construct()
	{
		# code...
	}	

	public function addNews($news){
		//get last id 
		$data = $this->getJson();
		$newsList = $data->news;
		foreach ($newsList as $key => $value) {
			$lastNewsId = $key;
		}
		$newsId = $lastNewsId + 1;

		$news = array(
			'title' => $news->getTitle(),
			'date'	=> $news->getDate(),
			'chapo' => $news->getChapo(),
			'image' => $news->getImage(),
			'texte'	=> $news->getTexte()
			);

		$data->news->$newsId = $news;			
		$newJson = $this->setJson($data);
		return $newsId;
	}

	public function getNewsById($id)
	{
		$data = $this->getJson();
		$newsData = $data->news->$id;
		$news = new News();	
		$news->setId($id);
		$news->setTitle($newsData->title);
		$news->setDate($newsData->date);
		$news->setChapo($newsData->chapo);
		$news->setImage($newsData->image);
		$news->setTexte($newsData->texte);

		return $news;

	}

	public function getAllNews()
	{
		$data = $this->getJson();
		$listNews = array();
		foreach($data->news as $key => $newsValue){
			$news = new News();	
			$news->setId($key);
			$news->setTitle($newsValue->title);
			$news->setDate($newsValue->date);
			$news->setChapo($newsValue->chapo);
			$news->setImage($newsValue->image);
			$news->setTexte($newsValue->texte);
			$listNews[] = $news;
		}			
		return $listNews;
	}
	

	public function getListNews($limit)
	{
		$data = $this->getJson();
		$listNews = array();
		foreach ($data->news as $key => $value) {
			$lastNewsId = $key;
		}

		if($limit>$lastNewsId)
		{
			$limit = $lastNewsId;
		}

		$data = $this->getJson();
		$listNews = array();
		for($i=($lastNewsId-$limit)+1;$i<=$lastNewsId;$i++){
			$news = new News();	
			$news->setId($i);
			$news->setTitle($data->news->$i->title);
			$news->setDate($data->news->$i->date);
			$news->setChapo($data->news->$i->chapo);
			$news->setImage($data->news->$i->image);
			$news->setTexte($data->news->$i->texte);
			$listNews[] = $news;
		}			
		return $listNews;
	}

	public function deleteNews($id)
	{
		$data = $this->getJson();
		unset($data->news->$id);
		$newJson = $this->setJson($data);
		return $newJson;		
	}

	public function editNews($id,$news)
	{
		$data = $this->getJson();
		$news = array(
			'title' => $news->getTitle(),
			'date'	=> $news->getDate(),
			'chapo' => $news->getChapo(),
			'image' => $news->getImage(),
			'texte'	=> $news->getTexte()
		);
		$data->news->$id = $news;			
		$newJson = $this->setJson($data);
		return $newJson;	
	}

	public function getLastNews()
	{
		$data = $this->getJson();
		foreach ($data->news as $key => $value) {
			$lastNewsId = $key;
		}
		
		$news = new News();	
		$news->setId($lastNewsId);
		$news->setTitle($data->news->$lastNewsId->title);
		$news->setDate($data->news->$lastNewsId->date);
		$news->setChapo($data->news->$lastNewsId->chapo);
		$news->setImage($data->news->$lastNewsId->image);
		$news->setTexte($data->news->$lastNewsId->texte);

		return $news;
	}


}

?>