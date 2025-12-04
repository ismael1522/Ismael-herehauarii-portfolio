<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class PorfolioController extends AbstractController
{
    #[Route('/', name: 'app_porfolio')]
    public function index(): Response
    {
        return $this->render('porfolio/index.html.twig', [
            'controller_name' => 'PorfolioController',
        ]);
    }
  
    #[Route('/competence', name: 'app_competence')]
    public function competence(): Response
    {
        return $this->render('competence/index.html.twig', [
            'controller_name' => 'CompetenceController',
        ]);
    }

    #[Route('/Loisirs', name: 'app_loisirs')]
    public function Loisirs(): Response
    {
        return $this->render('Loisirs/index.html.twig', [
            'controller_name' => 'LoisirsController',
        ]);
    }
}
