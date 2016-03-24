<?php 

require(dirname(__FILE__).'/../Object/User.php');
require(dirname(__FILE__).'/./DataManager.php');

class UserRepository extends DataManager
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
			if($user->{'pseudo'}==$newUser->getPseudo())
			{
				return false;
				break;
			}
			$lastUserId = $id;
		}
		$userId = $lastUserId + 1;
		try {
			$user = array(	
				'pseudo' => $newUser->getPseudo(),
				'password' => $newUser->getPassword(),
				'superuser' => $newUser->getSuperUser()
				);
			$data->user->$userId = $user;			
			$newJson = $this->setUserJson($data);
			return true;

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
						'password' => $user->getPassword(),
						'superuser' => $newUser->getSuperUser()
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

	public function getListUser()
	{
		$data = $this->getUserJson();
		$listUser = array();
		foreach ($data->user as $id => $userData){
			$user = new User();
			$user->setId($id);
			$user->setPseudo($userData->pseudo);
			$user->setPassword('');
			$user->setSuperUser($userData->superuser);
			$listUser[] = $user;
		}
		return $listUser;
	}

	public function changeSuperUser($id)
	{
		try {
			$data = $this->getUserJson();
			$userRight = $data->user->$id->superuser;
			$userRight = !$userRight;
			$data->user->$id->superuser = $userRight;
			$newJson = $this->setUserJson($data);
			return $newJson;
		}catch(Exception $e){
			echo 'ERROR : '.$e;
		}
	}

}