<?php

require(dirname(__FILE__).'/../Object/Contact.php');
require_once(dirname(__FILE__).'/./DataManager.php');

class ContactRepository extends DataManager
{
	public function __construct()
	{
		# code...
	}	

	public function getContact()
	{
		$data = $this->getJson();
		$contactData = $data->contact;
		$contact = new Contact();
		$contact->setMail($contactData->mail);
		$contact->setName($contactData->name);
		$contact->setFirstName($contactData->firstname);
		$contact->setFbLink($contactData->fblink);
		$contact->setTwLink($contactData->twlink);
		$contact->setYtLink($contactData->ytlink);
		return $contact;
	}

	public function editContact($contactData)
	{
		$data = $this->getJson();

		$contact = array(
				'mail' 		=> $contactData->getMail(),
				'name'		=> $contactData->getName(),
				'firstname'	=> $contactData->getFirstName(),
				'fblink'	=> $contactData->getFbLink(),
				'twlink'	=> $contactData->getTwLink(),
				'ytlink'	=> $contactData->getYtLink()
				);
			
		$data->contact = $contact;			
		$newJson = $this->setJson($data);
		return $newJson;	
	
		
	}
}

?>