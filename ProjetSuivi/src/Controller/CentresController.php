<?php

namespace App\Controller;

use App\Entity\Centres;
use App\Form\CentresType;
use App\Repository\CentresRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/centres')]
class CentresController extends AbstractController
{
    #[Route('/', name: 'app_centres_index', methods: ['GET'])]
    public function index(CentresRepository $centresRepository): Response
    {
        return $this->render('centres/index.html.twig', [
            'centres' => $centresRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_centres_new', methods: ['GET', 'POST'])]
    public function new(Request $request, CentresRepository $centresRepository): Response
    {
        $centre = new Centres();
        $form = $this->createForm(CentresType::class, $centre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $centresRepository->add($centre);
            return $this->redirectToRoute('app_centres_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('centres/new.html.twig', [
            'centre' => $centre,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_centres_show', methods: ['GET'])]
    public function show(Centres $centre): Response
    {
        return $this->render('centres/show.html.twig', [
            'centre' => $centre,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_centres_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Centres $centre, CentresRepository $centresRepository): Response
    {
        $form = $this->createForm(CentresType::class, $centre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $centresRepository->add($centre);
            return $this->redirectToRoute('app_centres_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('centres/edit.html.twig', [
            'centre' => $centre,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_centres_delete', methods: ['POST'])]
    public function delete(Request $request, Centres $centre, CentresRepository $centresRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$centre->getId(), $request->request->get('_token'))) {
            $centresRepository->remove($centre);
        }

        return $this->redirectToRoute('app_centres_index', [], Response::HTTP_SEE_OTHER);
    }
}
