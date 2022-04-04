<?php

namespace App\Controller;

use App\Entity\TypesEvenement;
use App\Form\TypesEvenementType;
use App\Repository\TypesEvenementRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/types/evenement')]
class TypesEvenementController extends AbstractController
{
    #[Route('/', name: 'app_types_evenement_index', methods: ['GET'])]
    public function index(TypesEvenementRepository $typesEvenementRepository): Response
    {
        return $this->render('types_evenement/index.html.twig', [
            'types_evenements' => $typesEvenementRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_types_evenement_new', methods: ['GET', 'POST'])]
    public function new(Request $request, TypesEvenementRepository $typesEvenementRepository): Response
    {
        $typesEvenement = new TypesEvenement();
        $form = $this->createForm(TypesEvenementType::class, $typesEvenement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $typesEvenementRepository->add($typesEvenement);
            return $this->redirectToRoute('app_types_evenement_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('types_evenement/new.html.twig', [
            'types_evenement' => $typesEvenement,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_types_evenement_show', methods: ['GET'])]
    public function show(TypesEvenement $typesEvenement): Response
    {
        return $this->render('types_evenement/show.html.twig', [
            'types_evenement' => $typesEvenement,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_types_evenement_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, TypesEvenement $typesEvenement, TypesEvenementRepository $typesEvenementRepository): Response
    {
        $form = $this->createForm(TypesEvenementType::class, $typesEvenement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $typesEvenementRepository->add($typesEvenement);
            return $this->redirectToRoute('app_types_evenement_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('types_evenement/edit.html.twig', [
            'types_evenement' => $typesEvenement,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_types_evenement_delete', methods: ['POST'])]
    public function delete(Request $request, TypesEvenement $typesEvenement, TypesEvenementRepository $typesEvenementRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$typesEvenement->getId(), $request->request->get('_token'))) {
            $typesEvenementRepository->remove($typesEvenement);
        }

        return $this->redirectToRoute('app_types_evenement_index', [], Response::HTTP_SEE_OTHER);
    }
}
