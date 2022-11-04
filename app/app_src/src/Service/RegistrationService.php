<?php
namespace App\Service;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

use App\Entity\User;
use App\Repository\UserRepository;
use App\Model\UserRegistrationModel;

use App\Exception\UserAlreadyExistsException;

class RegistrationService
{

	private UserPasswordHasherInterface $passwordHasher; 
	private UserRepository $userRepository;

	public function __construct(UserPasswordHasherInterface $passwordHasher, UserRepository $userRepository)
	{
		$this->passwordHasher = $passwordHasher;
		$this->userRepository = $userRepository;
	}


	public function registrate(UserRegistrationModel $userRegistrationParams):array
	{

		if ($this->userRepository->checkUserByLogin($userRegistrationParams->getUserLogin()))
		{
			throw new UserAlreadyExistsException('Данный пользователь уже существует в системе');

		}

		$user = new User();

		$user_login = $userRegistrationParams->getUserLogin();
		$plaintext_password = $userRegistrationParams->getUserPlainPassword();

		$hashedPassword = $this->passwordHasher->hashPassword($user, $plaintext_password);

		$user->setLogin($user_login);
		$user->setPassword($hashedPassword);

		$this->userRepository->save($user, true);
		

		return ['message'=>'Registration success'];


	}	


}
