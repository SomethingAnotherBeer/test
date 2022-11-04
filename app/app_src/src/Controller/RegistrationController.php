<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\{Request, JsonResponse};
use Symfony\Component\Routing\Annotation\Route;


use App\Service\RegistrationService;
use App\Model\UserRegistrationModel;


class RegistrationController extends AbstractController
{

    private RegistrationService $registrationService;

    public function __construct(RegistrationService $registrationService)
    {
        $this->registrationService = $registrationService;
    }


    #[Route('/registrate', methods:['POST'])]
    public function registrate(Request $request)
    {
        $response = $this->registrationService->registrate(new UserRegistrationModel($request->toArray()));

        return $this->json($response);

    }

}
