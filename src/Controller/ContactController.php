<?php

namespace App\Controller;

use App\Repository\ContactRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    private ContactRepository $contactRepository;

    public function __construct(ContactRepository $contactRepository)
    {
        $this->contactRepository = $contactRepository;
    }

    #[Route('/contact', name: 'contact')]
    public function index(): Response
    {
        return $this->render('contact/index.html.twig', [
            'controller_name' => 'le Rat',
            'contacts' => $this->contactRepository->findAll()
        ]);
    }
    #[Route('/contact/{email}', name: 'contact_email')]
    public function email(Request $request, string $email) : Response
    {
        $name = $request->query->get('contact');

    return $this->render('contact/index.html.twig', ['email' => $email,
       'controller_name' => 'rat' , 'name'=> $email,]);

    }
}
