<?php

namespace App\Controller;

use App\Repository\CreationRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CreationDetailController extends AbstractController
{
    #[Route("/creation/{id}", "creation_show", methods: ["GET"])]
    public function show(int $id, CreationRepository $creationRepository): Response
    {
        $creation = $creationRepository->find($id);

        if (!$creation) {
            throw $this->createNotFoundException('La création demandée n\'existe pas.');
        }
        
        return $this->render('pages/creationDetail.html.twig', [
            'creation' => $creation,
        ]);
    }
}

