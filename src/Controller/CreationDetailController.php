<?php

namespace App\Controller;

use App\Entity\Creation;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CreationDetailController extends AbstractController
{
    #[Route("/creation/{id}", name: "creation_show", methods: ["GET"])]
    public function show(Creation $creation): Response
    {
        if (!$creation->getIsPublic() && !$this->isGranted('ROLE_ADMIN')) {
            return $this->redirectToRoute('access_denied');
        }

        return $this->redirectToRoute('creation.index', ['modal_id' => $creation->getId()]);
    }
}
