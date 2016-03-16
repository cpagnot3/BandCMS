<?php 

class Contact 
{

	private $mail;

	private $name;

	private $firstName;

	private $fbLink;

	private $twLink;

	private $ytLink;

	//getMail
	public function getMail()
	{
		return $this->mail;
	}

	//setMail
	public function setMail($mail)
	{
		$this->mail = $mail;
		return $this;
	}

	//getName
	public function getName()
	{
		return $this->name;
	}

	//setName
	public function setName($name)
	{
		$this->name = $name;
		return $this;
	}

	//getFirstName
	public function getFirstName()
	{
		return $this->firstName;
	}

	//setFirstName
	public function setFirstName($firstName)
	{
		$this->firstName = $firstName;
		return $this;
	}

	//getFbLink
	public function getFbLink()
	{
		return $this->fbLink;
	}

	//setFbLink
	public function setFbLink($fbLink)
	{
		$this->fbLink = $fbLink;
		return $this;
	}

	//getTwLink
	public function getTwLink()
	{
		return $this->twLink;
	}

	//setTwLink
	public function setTwLink($twLink)
	{
		$this->twLink = $twLink;
		return $this;
	}

	//setYtLink
	public function getYtLink()
	{
		return $this->ytLink;
	}

	//setFbLink
	public function setYtLink($ytLink)
	{
		$this->ytLink = $ytLink;
		return $this;
	}

	//default construct
	public function __construct(){
		
	} 






}

?>