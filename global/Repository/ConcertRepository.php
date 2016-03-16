<?php

require(dirname(__FILE__).'/../Object/Concert.php');

class ConcertRepository
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