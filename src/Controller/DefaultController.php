<?php

namespace App\Controller;

use App\Entity\Performance;
use App\Form\PerformanceType;
use App\Repository\PerformanceRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="default")
     */
    public function index(PerformanceRepository $performanceRepository)
    {
        return $this->render('default/index.html.twig', [
            'performances' => $performanceRepository->findAll(),
            'controller_name' => 'DefaultController',
        ]);
    }
}
