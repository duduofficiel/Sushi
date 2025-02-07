<?php

namespace App\Controller;

use App\Entity\MessengerMessage;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ContactUsController extends AbstractController
{
    #[Route('/contact-us', name: 'contactus', methods: ['POST'])]
    public function manage(Request $request, EntityManagerInterface $entityManager ): JsonResponse
    {
        $data = $request->request->all();

        if (!isset($data['message-text'], $data['recipient-name'], $data['recipient-email'], $data['recipient-subject'])) {
            return new JsonResponse(['status' => 'error', 'message' => 'Missing form fields.'], 400);
        }

        if (empty($data['message-text']) || empty($data['recipient-name']) || empty($data['recipient-email']) || empty($data['recipient-subject'])) {
            return new JsonResponse(['status' => 'error', 'message' => 'All fields are required.'], 400);
        }

        if (!filter_var($data['recipient-email'], FILTER_VALIDATE_EMAIL)) {
            return new JsonResponse(['status' => 'error', 'message' => 'Invalid email address.'], 400);
        }

        $msg = new MessengerMessage();
        $msg->setBody($data['message-text']);
        $msg->setHeaders([
            'name' => $data['recipient-name'],
            'email' => $data['recipient-email'],
            'subject' => $data['recipient-subject'],
        ]);

        try {
            $entityManager->persist($msg);
            $entityManager->flush();
            return new JsonResponse(['status' => 'success', 'message' => 'Your message has been successfully sent!'], 200);
        } catch (\Exception $e) {
            return new JsonResponse(['status' => 'error', 'message' => 'Error while saving the message: ' . $e->getMessage()], 500);
        }
    }
}
