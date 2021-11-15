<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IncludeController extends AbstractController
{
    #[Route('/include', name: 'include')]
    public function index(): Response
    {
        return $this->render('include/index.html.twig', [
            'controller_name' => 'IncludeController',
        ]);
    }
}
