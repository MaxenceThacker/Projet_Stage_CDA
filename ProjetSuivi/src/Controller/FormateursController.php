<?php

namespace App\Controller;

use App\Entity\Formateurs;
use App\Form\FormateursType;
use App\Repository\FormateursRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/formateurs')]
class FormateursController extends AbstractController
{
    #[Route('/', name: 'app_formateurs_index', methods: ['GET'])]
    public function index(FormateursRepository $formateursRepository): Response
    {
        return $this->render('formateurs/index.html.twig', [
            'formateurs' => $formateursRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_formateurs_new', methods: ['GET', 'POST'])]
    public function new(Request $request, FormateursRepository $formateursRepository): Response
    {
        $formateur = new Formateurs();
        $form = $this->createForm(FormateursType::class, $formateur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $formateursRepository->add($formateur);
            return $this->redirectToRoute('app_formateurs_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('formateurs/new.html.twig', [
            'formateur' => $formateur,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_formateurs_show', methods: ['GET'])]
    public function show(Formateurs $formateur): Response
    {
        return $this->render('formateurs/show.html.twig', [
            'formateur' => $formateur,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_formateurs_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Formateurs $formateur, FormateursRepository $formateursRepository): Response
    {
        $form = $this->createForm(FormateursType::class, $formateur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $formateursRepository->add($formateur);
            return $this->redirectToRoute('app_formateurs_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('formateurs/edit.html.twig', [
            'formateur' => $formateur,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_formateurs_delete', methods: ['POST'])]
    public function delete(Request $request, Formateurs $formateur, FormateursRepository $formateursRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$formateur->getId(), $request->request->get('_token'))) {
            $formateursRepository->remove($formateur);
        }

        return $this->redirectToRoute('app_formateurs_index', [], Response::HTTP_SEE_OTHER);
    }
}
