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
		foreach($data->concert as $concert){
			$show = new Concert();	
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
	
}


?>