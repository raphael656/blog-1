<?php

namespace App\Controller;

use App\Entity\Article;
use App\Form\AjoutArticleType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AcceuilController extends AbstractController
{
    #[Route('/', name: 'acceuil')]
    public function index(Request $request): Response
    {
        $article = new Article();
        $form = $this->createForm(AjoutArticleType::class, $article);
        $form->handleRequest($request);
        dump($form->getViewData());
        if ($form->isSubmitted() && $form->isValid()){
                $entityManager = $this->getDoctrine()->getManager();
                 $entityManager ->persist($form->getData());
                 $entityManager->flush();
            }
        return $this->renderForm('acceuil/index.html.twig',[
            'controller_name' => 'controleur de contact',
            'form' => $form
        ]);



    }



}