<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminLegalController extends AbstractController
{
    #[Route('/legal', name: 'app_admin_legal')]
    public function index(): Response
    {
        return $this->render('admin_legal/index.html.twig', [
            'controller_name' => 'AdminLegalController',
        ]);
    }
}
