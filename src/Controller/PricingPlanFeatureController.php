<?php

namespace App\Controller;

use App\Entity\PricingPlanFeature;
use App\Form\PricingPlanFeatureType;
use App\Repository\PricingPlanFeatureRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/pricing/plan/feature')]
final class PricingPlanFeatureController extends AbstractController
{
    #[Route(name: 'app_pricing_plan_feature_index', methods: ['GET'])]
    public function index(PricingPlanFeatureRepository $pricingPlanFeatureRepository): Response
    {
        return $this->render('pricing_plan_feature/index.html.twig', [
            'pricing_plan_features' => $pricingPlanFeatureRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_pricing_plan_feature_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $pricingPlanFeature = new PricingPlanFeature();
        $form = $this->createForm(PricingPlanFeatureType::class, $pricingPlanFeature);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($pricingPlanFeature);
            $entityManager->flush();

            return $this->redirectToRoute('app_pricing_plan_feature_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('pricing_plan_feature/new.html.twig', [
            'pricing_plan_feature' => $pricingPlanFeature,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_pricing_plan_feature_show', methods: ['GET'])]
    public function show(PricingPlanFeature $pricingPlanFeature): Response
    {
        return $this->render('pricing_plan_feature/show.html.twig', [
            'pricing_plan_feature' => $pricingPlanFeature,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_pricing_plan_feature_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, PricingPlanFeature $pricingPlanFeature, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(PricingPlanFeatureType::class, $pricingPlanFeature);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_pricing_plan_feature_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('pricing_plan_feature/edit.html.twig', [
            'pricing_plan_feature' => $pricingPlanFeature,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_pricing_plan_feature_delete', methods: ['POST'])]
    public function delete(Request $request, PricingPlanFeature $pricingPlanFeature, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$pricingPlanFeature->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($pricingPlanFeature);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_pricing_plan_feature_index', [], Response::HTTP_SEE_OTHER);
    }
}
