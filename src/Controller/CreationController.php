<?php

namespace App\Controller;

use App\Entity\Like;
use App\Entity\Creation;
use App\Entity\Comment;
use App\Repository\LikeRepository;
use App\Repository\CreationRepository;
use App\Form\CommentType;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Csrf\CsrfTokenManagerInterface;
use Symfony\Component\Security\Csrf\CsrfToken;

class CreationController extends AbstractController
{
    #[Route("/creations", name: "creation.index", methods: ["GET"])]
    public function index(CreationRepository $creationRepository, Request $request): Response
    {
        $modalId = $request->query->get('modal_id');
        $user = $this->getUser();

        if ($user && $this->isGranted('ROLE_ADMIN')) {
            $creations = $creationRepository->findAll();
        } else {
            $creations = $creationRepository->findBy(['isPublic' => true]);
        }

        $commentForms = [];
        foreach ($creations as $creation) {
            $comment = new Comment();
            $commentForms[$creation->getId()] = $this->createForm(CommentType::class, $comment)->createView();
        }

        return $this->render('pages/creation.html.twig', [
            'creations' => $creations,
            'modal_id' => $modalId,
            'forms' => $commentForms,
        ]);
    }



    #[Route("/access-denied", name: "access_denied")]
    public function accessDenied(): Response
    {
        return $this->render('pages/accessDenied.html.twig');
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

        return $this->render('pages/creation.html.twig', [
            'creations' => $creations
        ]);
    }

    #[Route("/creations/{id}", name: "creation.comments", methods: ["GET", "POST"])]
    public function comments(
        Request $request,
        Creation $creation,
        EntityManagerInterface $manager
    ): Response {
        $comment = new Comment();
        $comment->setCreation($creation);
        $comment->setUser($this->getUser());

        $form = $this->createForm(CommentType::class, $comment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $manager->persist($comment);
            $manager->flush();

            $this->addFlash('success', 'Votre commentaire a été ajouté.');
            return $this->redirectToRoute('creation.comments', ['id' => $creation->getId()]);
        }

        $comments = $creation->getComments()->toArray();
        usort($comments, function ($a, $b) {
            return $b->getCreatedAt() <=> $a->getCreatedAt();
        });

        return $this->render('partials/_cards.html.twig', [
            'creation' => $creation,
            'comments' => $comments,
            'form' => $form->createView(),
        ]);
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

    #[Route("/creations/{id}/like", name: "creation.like", methods: ["GET"])]
    public function like(Creation $creation, EntityManagerInterface $manager, LikeRepository $likeRepository): Response
    {
        $user = $this->getUser();

        if (!$user) {
            return $this->json([
                'code' => 403,
                'message' => 'Access denied'
            ], 403);
        }

        if ($creation->isLikedByUser($user)) {
            $like = $likeRepository->findOneBy([
                'creation' => $creation,
                'user' => $user
            ]);

            $manager->remove($like);
            $manager->flush();

            return $this->json([
                'code' => 200,
                'message' => 'Like deleted',
                'likes' => $likeRepository->count(['creation' => $creation])
            ], 200);
        }

        $like = new Like();
        $like->setCreation($creation);
        $like->setUser($user);

        $manager->persist($like);
        $manager->flush();

        return $this->json([
            'code' => 200,
            'message' => 'Like added',
            'likes' => $likeRepository->count(['creation' => $creation])
        ], 200);
    }
}
