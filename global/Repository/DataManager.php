<?php

class DataManager 
{
	public function __construct()
	{
		# code...
	}

	public function getJson()
	{
		$json = file_get_contents(dirname(__FILE__).'/../JsonData/site.json');		
		$data = json_decode($json);
		return $data;
	}

	public function setJson($newJsonString)
	{
		$newJsonString = json_encode($newJsonString);
		$data = file_put_contents(dirname(__FILE__).'/../JsonData/site.json', $newJsonString);			
		return $data;
	}	
}

?>