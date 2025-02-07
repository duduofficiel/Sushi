<?php

namespace App\Controller;

use App\Entity\PricingPlan;
use App\Form\PricingPlanType;
use App\Repository\PricingPlanRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/pricing/plan')]
final class PricingPlanController extends AbstractController
{
    #[Route(name: 'app_pricing_plan_index', methods: ['GET'])]
    public function index(PricingPlanRepository $pricingPlanRepository): Response
    {
        return $this->render('pricing_plan/index.html.twig', [
            'pricing_plans' => $pricingPlanRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_pricing_plan_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $pricingPlan = new PricingPlan();
        $form = $this->createForm(PricingPlanType::class, $pricingPlan);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($pricingPlan);
            $entityManager->flush();

            return $this->redirectToRoute('app_pricing_plan_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('pricing_plan/new.html.twig', [
            'pricing_plan' => $pricingPlan,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_pricing_plan_show', methods: ['GET'])]
    public function show(PricingPlan $pricingPlan): Response
    {
        return $this->render('pricing_plan/show.html.twig', [
            'pricing_plan' => $pricingPlan,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_pricing_plan_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, PricingPlan $pricingPlan, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(PricingPlanType::class, $pricingPlan);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_pricing_plan_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('pricing_plan/edit.html.twig', [
            'pricing_plan' => $pricingPlan,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_pricing_plan_delete', methods: ['POST'])]
    public function delete(Request $request, PricingPlan $pricingPlan, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$pricingPlan->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($pricingPlan);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_pricing_plan_index', [], Response::HTTP_SEE_OTHER);
    }
}
