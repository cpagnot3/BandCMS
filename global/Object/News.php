<?php

class News {

	private $id;

	private $title;

	private $date;

	private $chapo;

	private $image;

	private $texte;

	//Getter/Setter

	//getId
	public function getId()
	{
		return $this->id;
	}

	//setId
	public function setId($id)
	{
		$this->id = $id;
		return $this;
	}

	//Getter/Setter

	//getTitle
	public function getTitle()
	{
		return $this->title;
	}

	//setTitle
	public function setTitle($title)
	{
		$this->title = $title;
		return $this;
	}

	//getDate
	public function getDate()
	{
		return $this->title;
	}

	//setDate
	public function setDate($date)
	{
		$this->date = $date;
		return $this;
	}

	//getChapo
	public function getChapo(){
		return $this->chapo;
	}

	//setChapo
	public function setChapo($chapo)
	{
		$this->chapo = $chapo;
		return $this;
	}

	//getImage
	public function getImage(){
		return $this->image;
	}

	//setImage
	public function setImage($image)
	{
		$this->image = $image;
		return $this;
	}

	//getTexte
	public function getTexte(){
		return $this->texte;
	}

	//setTexte
	public function setTexte($texte)
	{
		$this->texte = $texte;
		return $this;
	}

	//default construct
	public function __construct(){
		
	}



}
?>