<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    /**
     * @Route("/test", name="test")
     */
    public function index(): Response
    {
        return new JsonResponse([
            'message' => 'Hola Mundo desde symfony oculto' . random_int(1, 10000000000)
        ]);
    }

    /**
     * @Route("/symfony", name="symfony")
     */
    public function symfony(): Response
    {
        return new JsonResponse([
            'message' => 'Hola Mundo desde symfony en una carpeta' . random_int(1, 10000000000)
        ]);
    }

    /**
     * @Route("/test2", name="test2")
     */
    public function test2(): Response
    {
        return new JsonResponse([
            'message' => 'Hola Mundo desde symfony con cors resulto' . random_int(1, 10000000000)
        ], 200, ['Access-Control-Allow-Origin' => '*']);
    }
}
