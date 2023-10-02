<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminAboutusController extends AbstractController
{
    #[Route('/aboutus', name: 'app_admin_aboutus')]
    public function index(): Response
    {
        return $this->render('admin_aboutus/index.html.twig', [
            'controller_name' => 'AdminAboutusController',
        ]);
    }
}
