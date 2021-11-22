<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CreerUnArticleController extends AbstractController
{
    #[Route('/creer/un/article', name: 'creer_un_article')]
    public function index(): Response
    {
        return $this->render('creer_un_article/index.html.twig', [
            'controller_name' => 'CreerUnArticleController',
        ]);
    }
}
