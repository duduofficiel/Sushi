<?php

namespace App\Controller;

use App\Entity\PricingPlan;
use App\Entity\PricingPlanFeature;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class PricingController extends AbstractController
{
    #[Route('/pricing', name: 'pricing')]
    public function index(EntityManagerInterface $entityManager): Response
    {
        
       

       // PricingPlan ცხრილიდან ყველა ჩანაწერის მიღება
       $pricingPlans = $entityManager->getRepository(PricingPlan::class)->findAll();
       $features = $entityManager->getRepository(PricingPlanFeature::class)->findAll();
      
       // მონაცემების გაგზავნა Twig შაბლონში
       return $this->render('pricing/index.html.twig', [
           'pricing_plans' => $pricingPlans,
           'features' => $features,
       ]);
   }
}