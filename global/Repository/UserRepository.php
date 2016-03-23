<?php 

require(dirname(__FILE__).'/../Object/User.php');
require(dirname(__FILE__).'/./DataManager.php');

class NewsRepository extends DataManager
{
	public function __construct()
	{

	}

	public function addUser($newUser)
	{
		$data = $this->getUserJson();
		$userList = $data->user;

		foreach ($userList as $id => $user) 
		{
			if($user->{'pseudo'}==$pseudo)
			{
				return 'Error user already exist';
			}
			$lastUserId = $id;
		}
		$userId = $lastUserId + 1;
		try {
			$user = array(	
				'pseudo' => $user->getPseudo(),
				'password' => $user->getPassword()
				);
			$data->user->$userId = $user;			
			$newJson = $this->setUserJson($data);
			return $newJson;

		}catch(Exception $e){
			echo 'ERROR :'.$e;
		}
	}

	public function deleteUser($id)
	{
		try {
			$data = $this->getUserJson();
			unset($data->user->$id);
			$newJson = $this->setUserJson($data);
			return $newJson;
		}catch(Exception $e){
			echo 'ERROR : '.$e;
		}
	}

	public function chagePassword($user,$newPasword)
	{
		$data = $this->getUserJson();
		$userList = $this->user;
		foreach ($userList as $id => $login) 
		{
			if( ($login->{'pseudo'}==$user->getPseudo()) && ($login->{'password'}==$user->getPassword()) )
			{
				try {
					$data->user->$id = array(
						'pseudo' => $user->getPseudo(),
						'password' => $user->getPassword() 
						);
					$newJson = $this->setUserJson($data);
					return $newJson;
				} catch (Exception $e) {
					echo 'ERROR : '.$e;
				}

			}else{
				return 'Wrong pseudo/password';
			}
		}
	}

	public function connect($user)
	{
		$data = $this->getUserJson();
		$userList = $data->user;
		$connect = false; 
		foreach ($userList as $id => $login) 
		{
			if( ($login->{'pseudo'}==$user->getPseudo()) && ($login->{'password'}==$user->getPassword()) )
			{
				$connect = true;
			}
		}
		return $connect;
	}


}