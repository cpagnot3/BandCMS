<?php 

require(dirname(__FILE__).'/../Object/news.php');

class NewsRepository
{
	public function __construct()
	{
		# code...
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
}

?>