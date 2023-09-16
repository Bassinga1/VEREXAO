<?php

namespace App\Controller;

use App\Repository\ServiceRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FrontServiceController extends AbstractController
{
    /**
     * Fonction qui est appelé par un render dans la base et qui permet de générer un menu déroulant avec les services
    */
    public function renderServiceDropDown(ServiceRepository $serviceRepository): Response
    {
        $services = $serviceRepository->findBy(["isActive"=>true], ["name"=>"ASC"]);
        return $this->render('front_service/_service_dropdown.html.twig', [
            'services' => $services,
        ]);
    }
    
    
    #[Route('/service/{slug}', name: 'app_front_service')]
    public function index($slug, ServiceRepository $serviceRepository): Response
    {
        if($slug=="services"){
            return $this->render('front_service/index.html.twig', [
                'services' => $serviceRepository->findOneBy(["isActive"=>true], ["name"=>"ASC"])
            ]);
        }else{
            $service = $serviceRepository->findOneBy(["slug"=>$slug]);
            return $this->render('front_service/show.html.twig', [
                'service' => $service,
            ]);
        }
    }
}
