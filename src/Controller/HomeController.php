<?php

namespace App\Controller;

use App\Repository\CarouselRepository;
use App\Repository\HomeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/home', name: 'app_home')]
    #[Route('/', name: 'app_home2')]
    public function index(CarouselRepository $carouselRepository, HomeRepository $homeRepository): Response
    {
        
        // On récupère la home ayant la propriété isActive à la valeur true
        $home = $homeRepository->findOneBy(["isActive"=>true]);
        // On appelle dd
        // dd($home);
        // On récupère les carousels et la propriété tag à la valeur "home
        $carousels = $carouselRepository->findBy(["isActive"=>true,"tag"=>"home"], ["rankOrder"=>"ASC"]);
        // On appelle dd
        // dd($carousels);
        return $this->render('home/index.html.twig', [
            'home' => $home,
            'carousels' => $carousels
        ]);
    }
}
