<?php
namespace App\Security;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\Exception\CustomUserMessageAuthenticationException;
use Symfony\Component\Security\Http\Authenticator\AbstractAuthenticator;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\UserBadge;
use Symfony\Component\Security\Http\Authenticator\Passport\Passport;
use Symfony\Component\Security\Http\Authenticator\Passport\SelfValidatingPassport;
use Symfony\Component\Security\Http\Authenticator\Passport\Credentials\PasswordCredentials;


class ApiKeyAuthenticator extends AbstractAuthenticator
{
	public function supports(Request $request): ?bool
	{
		return $request->headers->has('authorization');
	}


	public function authenticate(Request $request): Passport
	{
		$user_login = '';
		$user_password = '';
		$user_params = [];	

		$base_auth_key = $request->headers->get('authorization');

		if(null === $base_auth_key)
		{
			throw new CustomUserMessageAuthenticationException('Не найдено содержимое заголовка authorization');
		}

		$user_params = $this->getEncodedAuthParams($base_auth_key);

		$user_login = $user_params['login'];
		$user_password = $user_params['password'];

		return new Passport(new UserBadge($user_login), new PasswordCredentials($user_password));

	}	






    public function onAuthenticationSuccess(Request $request, TokenInterface $token, string $firewallName): ?Response
    {
        return null;
    }




    public function onAuthenticationFailure(Request $request, AuthenticationException $exception): ?Response
    {
        $data = [
            'message' => strtr($exception->getMessageKey(), $exception->getMessageData())
        ];

        return new JsonResponse(json_encode($data, JSON_UNESCAPED_UNICODE), Response::HTTP_UNAUTHORIZED);

    }





	private function getEncodedAuthParams(string $authentication_key):array
	{
		$encoded_authentication_params = [];
		$encoded_string = '';

		$encoded_string = base64_decode($authentication_key);

		$encoded_authentication_params = explode(':', $encoded_string);

		if (count($encoded_authentication_params) !== 2)
		{
			throw new CustomUserMessageAuthenticationException("Требуемый формат ключа: base64(логин:пароль)");
		}

		return ['login' => trim($encoded_authentication_params[0]), 'password' => trim($encoded_authentication_params[1])];


	}


}