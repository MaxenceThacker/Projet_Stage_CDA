<?php

namespace App\Controller;

use App\Entity\LieuxEvenement;
use App\Form\LieuxEvenementType;
use App\Repository\LieuxEvenementRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/lieux/evenement')]
class LieuxEvenementController extends AbstractController
{
    #[Route('/', name: 'app_lieux_evenement_index', methods: ['GET'])]
    public function index(LieuxEvenementRepository $lieuxEvenementRepository): Response
    {
        return $this->render('lieux_evenement/index.html.twig', [
            'lieux_evenements' => $lieuxEvenementRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_lieux_evenement_new', methods: ['GET', 'POST'])]
    public function new(Request $request, LieuxEvenementRepository $lieuxEvenementRepository): Response
    {
        $lieuxEvenement = new LieuxEvenement();
        $form = $this->createForm(LieuxEvenementType::class, $lieuxEvenement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $lieuxEvenementRepository->add($lieuxEvenement);
            return $this->redirectToRoute('app_lieux_evenement_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('lieux_evenement/new.html.twig', [
            'lieux_evenement' => $lieuxEvenement,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_lieux_evenement_show', methods: ['GET'])]
    public function show(LieuxEvenement $lieuxEvenement): Response
    {
        return $this->render('lieux_evenement/show.html.twig', [
            'lieux_evenement' => $lieuxEvenement,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_lieux_evenement_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, LieuxEvenement $lieuxEvenement, LieuxEvenementRepository $lieuxEvenementRepository): Response
    {
        $form = $this->createForm(LieuxEvenementType::class, $lieuxEvenement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $lieuxEvenementRepository->add($lieuxEvenement);
            return $this->redirectToRoute('app_lieux_evenement_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('lieux_evenement/edit.html.twig', [
            'lieux_evenement' => $lieuxEvenement,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_lieux_evenement_delete', methods: ['POST'])]
    public function delete(Request $request, LieuxEvenement $lieuxEvenement, LieuxEvenementRepository $lieuxEvenementRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$lieuxEvenement->getId(), $request->request->get('_token'))) {
            $lieuxEvenementRepository->remove($lieuxEvenement);
        }

        return $this->redirectToRoute('app_lieux_evenement_index', [], Response::HTTP_SEE_OTHER);
    }
}
