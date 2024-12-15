<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccessDeniedController extends AbstractController
{
    #[Route("/accessdenied", "home.accessdenied", methods: ["GET"])]
    public function index(): Response
    {
        return $this->render('pages/accessDenied.html.twig', [
            'controller_name' => 'AccessDeniedController',
        ]);
    }
}
