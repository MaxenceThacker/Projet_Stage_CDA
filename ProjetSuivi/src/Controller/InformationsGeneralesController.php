<?php

namespace App\Application\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class InformationsGeneralesController extends AbstractController
{
    #[Route('/informations/generales', name: 'app_informations_generales')]
    public function index(): Response
    {
        return $this->render('informations_generales/index.html.twig', [
            'controller_name' => 'InformationsGeneralesController',
        ]);
    }
}
