<?php

require(dirname(__FILE__).'/../Object/Settings.php');
require(dirname(__FILE__).'/./DataManager.php');

class SettingsRepository extends DataManager
{
	public function __construct()
	{
		# code...
	}	

	public function getSettings()
	{
		$data = $this->getSettingsJson();
		$settingsData = $data->settings;
		$settings = new Settings();
		$settings->setName($settingsData->name);
		$settings->setSlogan($settingsData->slogan);

		return $settings;
	}

	public function updateSettings($settingsData)
	{
		$data = $this->getSettingsJson();

		$settings = array(
				'name' 		=> $settingsData->getName(),
				'slogan'	=> $settingsData->getSlogan()
				);
			
		$data->settings = $settings;			
		$newJson = $this->setSettingsJson($data);
		return $newJson;

	}
}
?>