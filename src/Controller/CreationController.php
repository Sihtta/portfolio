<?php

namespace App\Controller;

use App\Repository\CreationRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;


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

    #[Route("/creations/publique", name: "creation_.index.public", methods: ["GET"])]
    public function indexPublic(
        CreationRepository $repository,
        PaginatorInterface $paginator,
        Request $request
    ): Response {
        $creations = $paginator->paginate(
            $repository->findPublicCreation(null),
            $request->query->getint('page', 1),
            10
        );

        return $this->render('pages/creation_public.html.twig', [
            'creations' => $creations
        ]);
    }
}
