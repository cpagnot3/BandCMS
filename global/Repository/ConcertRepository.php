<?php

require(dirname(__FILE__).'/../Object/Concert.php');
require(dirname(__FILE__).'/./DataManager.php');

class ConcertRepository extends DataManager
{
	public function __construct()
	{
		# code...
	}	

	public function getListConcert()
	{
		$data = $this->getJson();
		$listConcert = array();
		foreach($data->concert as $key => $concert){
			$show = new Concert();	
			$show->setId($key);
			$show->setDateConcert($concert->datetime);
			$show->setPlace($concert->place);
			$show->setCity($concert->city);
			$show->setCountry($concert->country);
			$show->setBilleterie($concert->billeterie);
			$show->setLong($concert->long);
			$show->setLat($concert->lat);
			$listConcert[] = $show;
		}			
		return $listConcert;
	}

	public function getConcertById($id)
	{
		$data = $this->getJson();
		$concert = $data->concert->$id;
		$show = new Concert();	
		$show->setDateConcert($concert->datetime);
		$show->setPlace($concert->place);
		$show->setCity($concert->city);
		$show->setCountry($concert->country);
		$show->setBilleterie($concert->billeterie);
		$show->setLong($concert->long);
		$show->setLat($concert->lat);

		return $show;

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
				'billeterie'=> $show->getBilleterie(),
				'lat'		=> $show->getLat(),
				'long'		=> $show->getLong()
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
				'billeterie'=> $show->getBilleterie(),
				'lat'		=> $show->getLat(),
				'long'		=> $show->getLong()
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