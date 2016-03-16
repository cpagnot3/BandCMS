<?php 


class Concert 
{

	private $id;

	private $dateConcert;

	private $place;

	private $city;

	private $country;

	private $billeterie;


	//Getter/Setter

	//getId
	public function getId()
	{
		return $this->id;
	}

	//getId
	public function setId($id)
	{
		$this->id = $id;
		return $this;
	}

	//getDateConcert
	public function getDateConcert()
	{
		return $this->dateConcert;
	}

	//setDateConcert
	public function setDateConcert($dateConcert)
	{
		$this->dateConcert = $dateConcert;
		return $this;
	}

	//getPlace
	public function getPlace()
	{
		return $this->place;
	}

	//setPlace
	public function setPlace($place)
	{
		$this->place = $place;
		return $this;
	}

	//getCity()
	public function getCity()
	{
		return $this->city;
	}

	//setCity()
	public function setCity($city)
	{
		$this->city = $city;
		return $this;
	}

	//getCountry()
	public function getCountry()
	{
		return $this->country;
	}

	//setCountry()
	public function setCountry($country)
	{
		$this->country = $country;
		return $this;
	}

	//getBilleterie
	public function getBilleterie()
	{
		return $this->billeterie;
	}

	//setBilleterie
	public function setBilleterie($billeterie)
	{
		$this->billeterie = $billeterie;
		return $this;
	}

	//default construct
	public function __construct(){
		
	}


}
?>