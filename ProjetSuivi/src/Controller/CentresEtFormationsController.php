<?php

namespace App\Application\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CentresEtFormationsController extends AbstractController
{
    #[Route('/centres/et/formations', name: 'app_centres_et_formations')]
    public function index(): Response
    {
        return $this->render('centres_et_formations/index.html.twig', [
            'controller_name' => 'CentresEtFormationsController',
        ]);
    }
}
