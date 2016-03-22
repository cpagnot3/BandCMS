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

	

	public function addMusic($show)
	{
		//get last id
		$data = $this->getJson();
		$musicList = $data->music;
		foreach ($musicList as $key => $value) {
			$lastMusicId = $key;
		}
		$musicID = $lastMusicId + 1;

		$show = array(
				'title' 		=> $show->getTitle(),
				'artist'		=> $show->getArtist(),
				'album'			=> $show->getAlbum(),
				'releaseDate'	=> $show->getReleaseDate()
				);
			
		$data->music->$musicID = $show;			
		$newJson = $this->setJson($data);
		return $newJson;
		
	}

	public function editMusic($id, $show)
	{
		$data = $this->getJson();

		$show = array(
				'title' 		=> $show->getTitle(),
				'artist'		=> $show->getArtist(),
				'album'			=> $show->getAlbum(),
				'releaseDate'	=> $show->getReleaseDate()
				);
			
		$data->music->$id = $show;			
		$newJson = $this->setJson($data);
		return $newJson;	
	}

	public function deleteConcert($id)
	{
		$data = $this->getJson();
			unset($data->music->$id);
		$newJson = $this->setJson($data);
		return $newJson;
	}
	
}


?>