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

class CreationController extends AbstractController
{
    #[Route("/creations", name: "creation.index", methods: ["GET"])]
    public function index(CreationRepository $creationRepository, Request $request): Response
    {
        $modalId = $request->query->get('modal_id');
        $user = $this->getUser();

        if ($user && $this->isGranted('ROLE_ADMIN')) {
            // L'administrateur voit toutes les créations
            $creations = $creationRepository->findAll();
        } else {
            // Les utilisateurs normaux ne voient que les créations publiques
            $creations = $creationRepository->findBy(['isPublic' => true]);
        }

        if ($modalId) {
            $creation = $creationRepository->find($modalId);
            if (!$creation || (!$creation->getIsPublic() && !$this->isGranted('ROLE_ADMIN'))) {
                return $this->redirectToRoute('access_denied');
            }
        }

        return $this->render('pages/creation.html.twig', [
            'creations' => $creations,
            'modal_id' => $modalId,
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

    #[Route("/creations/{id}/comments", name: "creation.comments", methods: ["GET", "POST"])]
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

        return $this->render('comments/index.html.twig', [
            'creation' => $creation,
            'comments' => $creation->getComments(),
            'form' => $form->createView(),
        ]);
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
