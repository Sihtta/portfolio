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
use Symfony\Component\Security\Csrf\CsrfTokenManagerInterface;
use Symfony\Component\Security\Csrf\CsrfToken;

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
    
        $user = $this->getUser();
    
        if (!$user) {
            return $this->json(['error' => 'Unauthorized'], Response::HTTP_UNAUTHORIZED);
        }
    
        $content = $request->request->get('contentComment');
    
        if (empty($content)) {
            return $this->json(['error' => 'Content cannot be empty'], Response::HTTP_BAD_REQUEST);
        }
    
        $comment = new Comment();
        $comment->setContentComment($content);
        $comment->setCreation($creation);
        $comment->setUser($user);
    
        $entityManager->persist($comment);
        $entityManager->flush();

        $createdAt = $comment->getCreatedAt()->format('d/m/Y');
        $response = [
            'success' => true,
            'comment' => [
                'id' => $comment->getId(),
                'user' => $comment->getUser()->getPseudo(),
                'content' => $comment->getContentComment(),
                'createdAt' => $createdAt,
                'isUser' => $user === $comment->getUser(),
                'csrfToken' => $this->container->get('security.csrf.token_manager')->getToken('delete' . $comment->getId())->getValue()
            ]
        ];        
    
        return $this->json($response);
    }

    #[Route('/comment/delete/{id}', name: 'comment_delete', methods: ['POST'])]
    public function deleteComment(
        int $id,
        Request $request,
        EntityManagerInterface $entityManager,
        CsrfTokenManagerInterface $csrfTokenManager
    ): Response {
        $comment = $entityManager->getRepository(Comment::class)->find($id);

        if (!$comment) {
            throw $this->createNotFoundException('Commentaire non trouvé.');
        }

        $csrfToken = new CsrfToken('delete' . $comment->getId(), $request->request->get('_token'));
        if (!$csrfTokenManager->isTokenValid($csrfToken)) {
            throw $this->createAccessDeniedException('Token CSRF invalide.');
        }

        $user = $this->getUser();
        if ($comment->getUser() !== $user) {
            $this->addFlash('error', 'Vous ne pouvez supprimer que vos propres commentaires.');
            return $this->redirect($request->headers->get('referer') ?? $this->generateUrl('creation.index'));
        }

        $entityManager->remove($comment);
        $entityManager->flush();

        $this->addFlash('success', 'Commentaire supprimé avec succès.');

        $referer = $request->headers->get('referer');
        return $this->redirect($referer ?? $this->generateUrl('creation.index'));
    }

    #[Route('/comments/{creationId}', name: 'comments_list', methods: ['GET'])]
    public function listComments(
        int $creationId,
        EntityManagerInterface $entityManager
    ): Response {
        $creation = $entityManager->getRepository(Creation::class)->find($creationId);

        if (!$creation) {
            throw $this->createNotFoundException('Création non trouvée.');
        }

        $comments = $entityManager->getRepository(Comment::class)
            ->findBy(
                ['creation' => $creationId],
                ['createdAt' => 'DESC']
            );

        return $this->render('comment/index.html.twig', [
            'comments' => $comments,
            'creation' => $creation,
            'form' => $this->createForm(CommentType::class)->createView()
        ]);
    }
}