<?php

namespace App\Application\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ComptesController extends AbstractController
{
    #[Route('/comptes', name: 'app_comptes')]
    public function index(): Response
    {
        return $this->render('comptes/index.html.twig', [
            'controller_name' => 'ComptesController',
        ]);
    }

    public function adminDashboard(): Response
    { 
    $this->denyAccessUnlessGranted('ROLE_ADMIN', null, 'Utilisateur essayant de se connecter à la page sans le ROLE_ADMIN');
    }
}
