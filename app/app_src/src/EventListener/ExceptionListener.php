<?php
namespace App\EventListener;
use Symfony\Component\HttpFoundation\{Response, JsonResponse};
use Symfony\Component\HttpKernel\Event\ExceptionEvent;
use Symfony\Component\HttpKernel\Exception\HttpExceptionInterface;


use App\Exception\ExceptionContracts\{NotFound, BadData, SemanticError};

class ExceptionListener
{
	public function onKernelException(ExceptionEvent $event)
	{
		$exception = $event->getThrowable();


		$response = new JsonResponse();
		$message = $exception->getMessage();

		if($exception instanceof HttpExceptionInterface)
		{
			$response->setStatusCode($exception->getStatusCode());
		}


		else if ($exception instanceof NotFound)	
		{
			$response->setStatusCode(Response::HTTP_NOT_FOUND);
		}

		else if ($exception instanceof BadData)
		{
			$response->setStatusCode(Response::HTTP_BAD_REQUEST);
		}

		else if ($exception instanceof SemanticError)
		{
			$response->setStatusCode(Response::HTTP_OK);
		}


		else
		{
			$response->setStatusCode(Response::HTTP_INTERNAL_SERVER_ERROR);
		}

		$response->setContent(json_encode(['error' => $message], JSON_UNESCAPED_UNICODE));
		$event->setResponse($response);
		
	}



}