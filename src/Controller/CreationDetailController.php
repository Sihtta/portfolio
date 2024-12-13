<?php

namespace App\Controller;

use App\Entity\Creation;
use App\Repository\CreationRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class CreationDetailController extends AbstractController
{
    #[Security("is_granted('ROLE_ADMIN') or (is_granted('ROLE_USER') and creation.getIsPublic() === true)")]
    #[Route("/creation/{id}", name: "creation_show", methods: ["GET"])]
    public function show(Creation $creation): Response
    {
        return $this->render('pages/creationDetail.html.twig', [
            'creation' => $creation,
        ]);
    }
}
