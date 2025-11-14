<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class PorfolioController extends AbstractController
{
    #[Route('/porfolio', name: 'app_porfolio')]
    public function index(): Response
    {
        return $this->render('porfolio/index.html.twig', [
            'controller_name' => 'PorfolioController',
        ]);
    }
}
