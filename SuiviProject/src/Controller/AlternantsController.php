<?php

namespace App\Controller;

use App\Entity\Alternants;
use App\Form\AlternantsType;
use App\Repository\AlternantsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/alternants')]
class AlternantsController extends AbstractController
{
    #[Route('/', name: 'app_alternants_index', methods: ['GET'])]
    public function index(AlternantsRepository $alternantsRepository): Response
    {
        return $this->render('alternants/index.html.twig', [
            'alternants' => $alternantsRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_alternants_new', methods: ['GET', 'POST'])]
    public function new(Request $request, AlternantsRepository $alternantsRepository): Response
    {
        $alternant = new Alternants();
        $form = $this->createForm(AlternantsType::class, $alternant);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $alternantsRepository->add($alternant);
            return $this->redirectToRoute('app_alternants_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('alternants/new.html.twig', [
            'alternant' => $alternant,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_alternants_show', methods: ['GET'])]
    public function show(Alternants $alternant): Response
    {
        return $this->render('alternants/show.html.twig', [
            'alternant' => $alternant,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_alternants_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Alternants $alternant, AlternantsRepository $alternantsRepository): Response
    {
        $form = $this->createForm(AlternantsType::class, $alternant);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $alternantsRepository->add($alternant);
            return $this->redirectToRoute('app_alternants_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('alternants/edit.html.twig', [
            'alternant' => $alternant,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_alternants_delete', methods: ['POST'])]
    public function delete(Request $request, Alternants $alternant, AlternantsRepository $alternantsRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$alternant->getId(), $request->request->get('_token'))) {
            $alternantsRepository->remove($alternant);
        }

        return $this->redirectToRoute('app_alternants_index', [], Response::HTTP_SEE_OTHER);
    }
}
