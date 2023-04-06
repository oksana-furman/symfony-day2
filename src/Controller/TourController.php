<?php

namespace App\Controller;

use App\Entity\Tour;
use App\Repository\TourRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TourController extends AbstractController
{
    #[Route('/tour', name: 'app_tour')]
    public function index(ManagerRegistry $doctrine): Response
    {
        $em = $doctrine->getManager();
        // $tour1 = new Tour();
        // $tour1->setDestination("Bora-Bora");
        // $tour1->setDuration("7 days");
        // $tour1->setType("Beach Tour");
        // $tour1->setHotel("Big Hotel");
        // $tour1->setPrice(1200.00);
        // $tour1->setIncluded("all included");
        // $tour1->setIncluded("all included");
        
        return $this->render('tour/index.html.twig', [
            'controller_name' => 'This Travel Agency',

        ]);
    }
    #[Route('/tour', name: 'app_tour')]
    public function tours(TourRepository $tr): Response
    {
               
        return $this->render('tour/index.html.twig', [
            'tours' => $tr->findAll(),

        ]);
    }

    #[Route('/tour-about', name: 'app_tour-about')]
    public function about(): Response
    {
        return $this->render('tour/about.html.twig', [
            'controller_name' => 'This Travel Agency',
        ]);
    }
}
