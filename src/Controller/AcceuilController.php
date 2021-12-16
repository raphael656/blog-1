<?php

namespace App\Controller;

use App\Entity\Tp;
use App\Form\AddtpType;
use App\Repository\ArticleRepository;
use App\Repository\TpRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AcceuilController extends AbstractController
{
    private  $tpRepository;

    public function __construct(TpRepository $tpRepository)
    {
        $this->tpRepository = $tpRepository;
    }

    #[Route('/', name: 'acceuil')]
    public function index(Request $request): Response
    {
            $tp = new Tp();
        $form = $this->createForm(AddtpType::class, $tp);
        $form->handleRequest($request);
        dump($form->getViewData());
        if ($form->isSubmitted() && $form->isValid()){
                $entityManager = $this->getDoctrine()->getManager();
                 $entityManager ->persist($form->getData());
                 $entityManager->flush();
                // $article = $form->getData();
            return $this-> redirectToRoute('acceuil');
            }
        return $this->renderForm('acceuil/index.html.twig',[
            'controller_name' => 'controleur de contact',
            'form' => $form,

            'tp' => $this->tpRepository->findAll(),
        ]);




    }
    #[Route('/{id}', name: 'tpinfo')]
    public function tpinfo (Request $request) {
        $info = $request->get('id');
        return $this->render('acceuil/info.html.twig',[
            'info' => $this->tpRepository->find($info),
        ]);
    }


}