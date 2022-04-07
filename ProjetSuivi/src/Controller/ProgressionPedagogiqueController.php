<?php

namespace App\Application\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProgressionPedagogiqueController extends AbstractController
{
    #[Route('/progression/pedagogique', name: 'app_progression_pedagogique')]
    public function index(): Response
    {
        return $this->render('progression_pedagogique/index.html.twig', [
            'controller_name' => 'ProgressionPedagogiqueController',
        ]);
    }
}
