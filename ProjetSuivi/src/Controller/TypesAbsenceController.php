<?php

namespace App\Controller;

use App\Entity\TypesAbsence;
use App\Form\TypesAbsenceType;
use App\Repository\TypesAbsenceRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/types/absence')]
class TypesAbsenceController extends AbstractController
{
    #[Route('/', name: 'app_types_absence_index', methods: ['GET'])]
    public function index(TypesAbsenceRepository $typesAbsenceRepository): Response
    {
        return $this->render('types_absence/index.html.twig', [
            'types_absences' => $typesAbsenceRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_types_absence_new', methods: ['GET', 'POST'])]
    public function new(Request $request, TypesAbsenceRepository $typesAbsenceRepository): Response
    {
        $typesAbsence = new TypesAbsence();
        $form = $this->createForm(TypesAbsenceType::class, $typesAbsence);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $typesAbsenceRepository->add($typesAbsence);
            return $this->redirectToRoute('app_types_absence_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('types_absence/new.html.twig', [
            'types_absence' => $typesAbsence,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_types_absence_show', methods: ['GET'])]
    public function show(TypesAbsence $typesAbsence): Response
    {
        return $this->render('types_absence/show.html.twig', [
            'types_absence' => $typesAbsence,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_types_absence_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, TypesAbsence $typesAbsence, TypesAbsenceRepository $typesAbsenceRepository): Response
    {
        $form = $this->createForm(TypesAbsenceType::class, $typesAbsence);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $typesAbsenceRepository->add($typesAbsence);
            return $this->redirectToRoute('app_types_absence_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('types_absence/edit.html.twig', [
            'types_absence' => $typesAbsence,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_types_absence_delete', methods: ['POST'])]
    public function delete(Request $request, TypesAbsence $typesAbsence, TypesAbsenceRepository $typesAbsenceRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$typesAbsence->getId(), $request->request->get('_token'))) {
            $typesAbsenceRepository->remove($typesAbsence);
        }

        return $this->redirectToRoute('app_types_absence_index', [], Response::HTTP_SEE_OTHER);
    }
}
