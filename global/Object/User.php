<?php

class User 
{

	private $id;

	private $pseudo;

	private $password;

	private $superuser;

	public function getId()
	{
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
		return $this;
	}

	public function getPseudo()
	{
		return $this->pseudo;
	}

	public function setPseudo($pseudo)
	{
		$this->pseudo = $pseudo;
		return $this;
	}

	public function getPassword()
	{
		return $this->password;
	}

	public function setPassword($password)
	{
		$this->password = $password;
		return $this;
	}

	public function getSuperUser()
	{
		return $this->superuser;
	}

	public function setSuperUser($superuser)
	{
		$this->superuser = $superuser;
		return $this;
	}

	public function __construct(){
		
	}
}
?>