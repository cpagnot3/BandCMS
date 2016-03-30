<?php

class Settings {

	private $name;

	private $slogan;

	private $logo;

	//Getter/Setter

	public function getName()
	{
		return $this->name;
	}

	public function setName($name)
	{
		$this->name = $name;
		return $this;
	}

	//Getter/Setter
	public function getSlogan()
	{
		return $this->slogan;
	}

	public function setSlogan($slogan)
	{
		$this->slogan = $slogan;
		return $this;
	}

	public function getLogo()
	{
		return $this->logo;
	}

	public function setLogo($logo)
	{
		$this->logo = $logo;
		return $this;
	}

	/*
	public function getMembers(){
		return $this->chapo;
	}

	public function setMembers($members)
	{
		$this->members = $members;
		return $this;
	}
	*/
	//default construct
	public function __construct(){
		
	}



}
?>