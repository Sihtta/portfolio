<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\UsernameHistory;
use App\Form\UserPasswordType;
use App\Form\UserType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserController extends AbstractController
{
    #[Route('/utilisateur/edition/{id}', name: 'user.edit', methods: ['GET', 'POST'])]
    public function edit(User $choosenUser, Request $request, EntityManagerInterface $manager): Response
    {
        if (!$this->isGranted('ROLE_USER') || $this->getUser() !== $choosenUser) {
            return $this->redirectToRoute('access_denied');
        }

        $oldPseudo = $choosenUser->getPseudo();
        $form = $this->createForm(UserType::class, $choosenUser);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $newPseudo = $form->getData()->getPseudo();

            if ($oldPseudo !== $newPseudo) {
                $usernameHistory = new UsernameHistory();
                $usernameHistory->setUser($choosenUser)
                    ->setOldPseudo($oldPseudo)
                    ->setNewPseudo($newPseudo)
                    ->setChangedAt(new \DateTimeImmutable());

                $manager->persist($usernameHistory);
                $manager->flush();
            }

            $choosenUser->setPseudo($newPseudo);
            $manager->persist($choosenUser);
            $manager->flush();

            $this->addFlash('success', 'Les informations de votre compte ont bien été modifiées.');

            return $this->redirectToRoute('user.edit', ['id' => $choosenUser->getId()]);
        }

        return $this->render('pages/user/edit.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/utilisateur/edition-mot-de-passe/{id}', 'user.edit.password', methods: ['GET', 'POST'])]
    public function editPassword(User $choosenUser, Request $request, EntityManagerInterface $manager, UserPasswordHasherInterface $hasher): Response
    {
        if (!$this->isGranted('ROLE_USER') || $this->getUser() !== $choosenUser) {
            return $this->redirectToRoute('access_denied');
        }

        $form = $this->createForm(UserPasswordType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            if ($hasher->isPasswordValid($choosenUser, $form->getData()['plainPassword'])) {
                $choosenUser->setPassword(
                    $hasher->hashPassword($choosenUser, $form->getData()['newPassword'])
                );

                $this->addFlash('success', 'Le mot de passe a été modifié.');

                $manager->persist($choosenUser);
                $manager->flush();

                return $this->redirectToRoute('user.edit.password', ['id' => $choosenUser->getId()]);
            } else {
                $this->addFlash('warning', 'Le mot de passe renseigné est incorrect.');
            }
        }

        return $this->render('pages/user/edit_password.html.twig', [
            'form' => $form->createView()
        ]);
    }

    #[Route("/access-denied", name: "access_denied")]
    public function accessDenied(): Response
    {
        return $this->render('pages/accessDenied.html.twig');
    }
}
