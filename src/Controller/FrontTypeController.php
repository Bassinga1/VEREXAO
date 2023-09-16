<?php

namespace App\Controller;

use App\Repository\TypeRepository;
use Doctrine\DBAL\Types\TypeRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FrontTypeController extends AbstractController
{
    #[Route('/type/{slug}', name: 'app_front_type')]
    public function index($slug, TypeRepository $typeRepository): Response
    {
        return $this->render('front_type/index.html.twig', [
            'type' => $typeRepository->findOneBy(["slug"=>$slug]),
        ]);

    }
}
