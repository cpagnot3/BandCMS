<?php

require_once(dirname(__FILE__).'/../Object/Music.php');
require_once(dirname(__FILE__).'/./DataManager.php');

class MusicRepository extends DataManager
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
				'releaseDate'	=> $show->getReleaseDate(),
				'path'			=> $show->getPath()
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
				'releaseDate'	=> $show->getReleaseDate(),
				'path'			=> $show->getPath()
				);
			
		$data->music->$id = $show;
		$newJson = $this->setJson($data);
		return $newJson;	
	}

	public function deleteMusic($id)
	{
		$data = $this->getJson();
			unset($data->music->$id);
		$newJson = $this->setJson($data);
		return $newJson;
	}
	
}


?>