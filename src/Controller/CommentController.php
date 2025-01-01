<?php

namespace App\Controller;

use App\Entity\Comment;
use App\Entity\Creation;
use App\Form\CommentType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CommentController extends AbstractController
{
    #[Route('/comment/add/{creationId}', name: 'comment_add', methods: ['POST'])]
    public function addComment(
        int $creationId,
        Request $request,
        EntityManagerInterface $entityManager
    ): Response {
        $creation = $entityManager->getRepository(Creation::class)->find($creationId);

        if (!$creation) {
            throw $this->createNotFoundException('Création non trouvée.');
        }

        $comment = new Comment();
        $form = $this->createForm(CommentType::class, $comment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $comment->setUser($this->getUser());
            $comment->setCreation($creation);

            $entityManager->persist($comment);
            $entityManager->flush();

            $this->addFlash('success', 'Commentaire ajouté avec succès !');
        }

        return $this->redirectToRoute('creation_show', ['id' => $creationId]);
    }
}