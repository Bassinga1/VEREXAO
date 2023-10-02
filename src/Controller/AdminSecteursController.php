<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminSecteursController extends AbstractController
{
    #[Route('/secteurs', name: 'app_admin_secteurs')]
    public function index(): Response
    {
        return $this->render('admin_secteurs/index.html.twig', [
            'controller_name' => 'AdminSecteursController',
        ]);
    }
}
