<?php

require(dirname(__FILE__).'/../Object/Concert.php');

class ConcertRepository
{
	public function __construct()
	{
		# code...
	}	

	public function getListConcert(){
		$data = getJson();

	}

	private function getJson(){
		 $json = file_get_contents('../JsonData/site.json')
		 json_decode($json);
		 return $json;
	}
	
}


?>