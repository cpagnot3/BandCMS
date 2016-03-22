<?php

require(dirname(__FILE__).'/../Object/Music.php');

class MusicRepository
{
	public function __construct()
	{
		# code...
	}	

	public function getListMusic()
	{
		$data = $this->getJson();
		$listMusic = array();
		foreach($data->music as $key => $music){
			$show = new Music();	
			$show->setId($key);
			$show->setTitle($music->title);
			$show->setArtist($music->artist);
			$show->setAlbum($music->album);
			$show->setReleaseDate($music->releaseDate);
			$listMusic[] = $show;
		}			
		return $listMusic ;
	}

	public function getMusicById($id)
	{
		$data = $this->getJson();
		$music = $data->music->$id;
		$show = new Music();	
		$show->setTitle($music->title);
		$show->setArtist($music->artist);
		$show->setAlbum($music->album);
		$show->setReleaseDate($music->releaseDate);

		return $show;

	}

	private function getJson()
	{
		$json = file_get_contents(dirname(__FILE__).'/../JsonData/site.json');		
		$data = json_decode($json);
		return $data;
	}

	private function setJson($newJsonString)
	{
		$newJsonString = json_encode($newJsonString);
		$data = file_put_contents(dirname(__FILE__).'/../JsonData/site.json', $newJsonString);			
		return $data;
	}

	

	public function addConcert($show)
	{
		//get last id
		$data = $this->getJson();
		$concertList = $data->concert;
		foreach ($concertList as $key => $value) {
			$lastConcertId = $key;
		}
		$concertID = $lastConcertId + 1;

		$show = array(
				'datetime' 	=> $show->getDateConcert(),
				'place'		=> $show->getPlace(),
				'city'		=> $show->getCity(),
				'country'	=> $show->getCountry(),
				'billeterie'=> $show->getBilleterie()
				);
			
		$data->concert->$concertID = $show;			
		$newJson = $this->setJson($data);
		return $newJson;		
		
	}

	public function editConcert($id,$show)
	{
		$data = $this->getJson();

		$show = array(
				'datetime' 	=> $show->getDateConcert(),
				'place'		=> $show->getPlace(),
				'city'		=> $show->getCity(),
				'country'	=> $show->getCountry(),
				'billeterie'=> $show->getBilleterie()
				);
			
		$data->concert->$id = $show;			
		$newJson = $this->setJson($data);
		return $newJson;		
	}

	public function deleteConcert($id)
	{
		$data = $this->getJson();
			unset($data->concert->$id);
		$newJson = $this->setJson($data);
		return $newJson;		
	}
	
}


?>