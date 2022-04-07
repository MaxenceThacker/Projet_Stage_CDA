<?php

namespace App\Application\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SuiviPedagogiqueController extends AbstractController
{
    #[Route('/suivi/pedagogique', name: 'app_suivi_pedagogique')]
    public function index(): Response
    {
        return $this->render('suivi_pedagogique/index.html.twig', [
            'controller_name' => 'SuiviPedagogiqueController',
        ]);
    }
}
