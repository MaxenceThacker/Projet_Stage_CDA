<?php

namespace App\Controller;

use App\Entity\ResponsablesLegaux;
use App\Form\ResponsablesLegauxType;
use App\Repository\ResponsablesLegauxRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/responsables/legaux')]
class ResponsablesLegauxController extends AbstractController
{
    #[Route('/', name: 'app_responsables_legaux_index', methods: ['GET'])]
    public function index(ResponsablesLegauxRepository $responsablesLegauxRepository): Response
    {
        return $this->render('responsables_legaux/index.html.twig', [
            'responsables_legauxes' => $responsablesLegauxRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_responsables_legaux_new', methods: ['GET', 'POST'])]
    public function new(Request $request, ResponsablesLegauxRepository $responsablesLegauxRepository): Response
    {
        $responsablesLegaux = new ResponsablesLegaux();
        $form = $this->createForm(ResponsablesLegauxType::class, $responsablesLegaux);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $responsablesLegauxRepository->add($responsablesLegaux);
            return $this->redirectToRoute('app_responsables_legaux_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('responsables_legaux/new.html.twig', [
            'responsables_legaux' => $responsablesLegaux,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_responsables_legaux_show', methods: ['GET'])]
    public function show(ResponsablesLegaux $responsablesLegaux): Response
    {
        return $this->render('responsables_legaux/show.html.twig', [
            'responsables_legaux' => $responsablesLegaux,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_responsables_legaux_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, ResponsablesLegaux $responsablesLegaux, ResponsablesLegauxRepository $responsablesLegauxRepository): Response
    {
        $form = $this->createForm(ResponsablesLegauxType::class, $responsablesLegaux);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $responsablesLegauxRepository->add($responsablesLegaux);
            return $this->redirectToRoute('app_responsables_legaux_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('responsables_legaux/edit.html.twig', [
            'responsables_legaux' => $responsablesLegaux,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_responsables_legaux_delete', methods: ['POST'])]
    public function delete(Request $request, ResponsablesLegaux $responsablesLegaux, ResponsablesLegauxRepository $responsablesLegauxRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$responsablesLegaux->getId(), $request->request->get('_token'))) {
            $responsablesLegauxRepository->remove($responsablesLegaux);
        }

        return $this->redirectToRoute('app_responsables_legaux_index', [], Response::HTTP_SEE_OTHER);
    }
}
