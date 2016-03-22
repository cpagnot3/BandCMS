<?php

class Music {

	private $id;

	private $title;

	private $artist;

	private $album;

	private $length;

	private $path;

	private $date;

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

	//getArtist
	public function getArtist()
	{
		return $this->artist;
	}

	//setArtist
	public function setArtist($artist)
	{
		$this->artist = $artist;
		return $this;
	}

	//getAlbum
	public function getAlbum()){
		return $this->album;
	}

	//setAlbum
	public function setAlbum($album)
	{
		$this->album = $album;
		return $this;
	}

	//getLength
	public function getLength(){
		return $this->length;
	}

	//setLength
	public function setLength($length)
	{
		$this->length = $length;
		return $this;
	}

	//getPath
	public function getPath(){
		return $this->path;
	}

	//setPath
	public function setPath($path)
	{
		$this->path = $path;
		return $this;
	}

	//getDate
	public function getDate(){
		return $this->date;
	}

	//setDate
	public function setDate($date)
	{
		$this->date = $date;
		return $this;
	}

	//default construct
	public function __construct(){
		
	}
}