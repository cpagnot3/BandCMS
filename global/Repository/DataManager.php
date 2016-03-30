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

	public function getUserJson()
	{
		$json = file_get_contents(dirname(__FILE__).'/../JsonData/user.json');		
		$data = json_decode($json);
		return $data;
	}

	public function setUserJson($newJsonString)
	{
		$newJsonString = json_encode($newJsonString);
		$data = file_put_contents(dirname(__FILE__).'/../JsonData/user.json', $newJsonString);			
		return $data;
	}

	public function getSettingsJson() {
		$json = file_get_contents(dirname(__FILE__).'/../JsonData/settings.json');		
		$data = json_decode($json);
		return $data;
	}

	public function setSettingsJson($newJsonString)
	{
		$newJsonString = json_encode($newJsonString);
		$data = file_put_contents(dirname(__FILE__).'/../JsonData/settings.json', $newJsonString);			
		return $data;
	}
}

?>