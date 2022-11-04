<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Service\NumberService;

class NumberController extends AbstractController
{
    private NumberService $numberService;


    public function __construct(NumberService $numberService)
    {
        $this->numberService = $numberService;
    }   


    #[Route('/generate')]
    public function generate():JsonResponse
    {
        $response = $this->numberService->generateNumber();
        return $this->json($response);
    }


    #[Route('/retrieve/{id}')]
    public function retrieve(string $id):JsonResponse
    {

        $response = $this->numberService->getNumber((int)$id);
        return $this->json($response);
    }


}
