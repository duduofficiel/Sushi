<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class CheckoutController extends AbstractController
{
    #[Route('/checkout', name: 'checkout')]
    public function index(): Response
    {
        return $this->render('checkout/index.html.twig');
    }

    #[Route('/checkout/process', name: 'checkout_process', methods: ['POST'])]
    public function handleCheckout(Request $request): JsonResponse
    {
        $data = $request->request->all();

        // აუცილებელი ველების გადამოწმება
        if (empty($data['name']) || empty($data['email']) || empty($data['address'])) {
            return new JsonResponse(['success' => false, 'message' => 'All fields are required.'], 400);
        }

        // აქ შეიძლება გადახდის პროცესის ლოგიკა (მაგ: API-თი გადახდის განხორციელება)

        return new JsonResponse([
            'success' => true,
            'message' => 'Payment successful!',
            'redirect' => $this->generateUrl('checkout_success')
        ]);
    }

    #[Route('/checkout/success', name: 'checkout_success')]
    public function success(): Response
    {
        return $this->render('checkout/success.html.twig');
    }
}
