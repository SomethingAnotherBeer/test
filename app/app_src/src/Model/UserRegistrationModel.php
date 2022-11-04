<?php
namespace App\Model;
use App\Exception\UnexpectedDataException;


class UserRegistrationModel
{
	private string $user_login;
	private string $user_password;

	public function __construct(array $user_params)
	{
		$this->checkUserParams($user_params);

		$this->user_login = trim($user_params['login']);
		$this->user_password = trim($user_params['password']);
	}


	private function checkUserParams(array $user_params):void
	{
		if(!isset($user_params['login']) || !isset($user_params['password']))
		{
			throw new UnexpectedDataException("Ожидались параметры 'login' и 'password'");
		}


	}


	public function getUserLogin():string
	{
		return $this->user_login;
	}

	public function getUserPlainPassword():string
	{
		return $this->user_password;
	}


}