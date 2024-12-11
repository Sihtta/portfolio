<?php

namespace App\Controller;

use App\Repository\CreationRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CreationController extends AbstractController
{
    #[Route("/creations", "creation.index", methods: ["GET"])]
    public function index(CreationRepository $creationRepository): Response
    {
        $creations = $creationRepository->findAll();

        return $this->render('pages/creation.html.twig', [
            'creations' => $creations,
        ]);
    }
}

