<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\UsernameHistory;
use App\Form\UserPasswordType;
use App\Form\UserType;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserController extends AbstractController
{
    #[Security("is_granted('ROLE_USER') and user === choosenUser")]
    #[Route('/utilisateur/edition/{id}', name: 'user.edit', methods: ['GET', 'POST'])]
    public function edit(
        User $choosenUser,
        Request $request,
        EntityManagerInterface $manager,
        UserPasswordHasherInterface $hasher
    ): Response {
        // Récupérer l'ancien pseudo avant que le formulaire ne soit soumis
        $oldPseudo = $choosenUser->getPseudo();

        // Créer et gérer le formulaire
        $form = $this->createForm(UserType::class, $choosenUser);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Récupérer le nouveau pseudo venant du formulaire
            $newPseudo = $form->getData()->getPseudo();

            // Vérification si les pseudos sont différents
            if ($oldPseudo !== $newPseudo) {
                // Créer l'historique du changement de pseudo
                $usernameHistory = new UsernameHistory();
                $usernameHistory->setUser($choosenUser)
                    ->setOldPseudo($oldPseudo)
                    ->setNewPseudo($newPseudo)
                    ->setChangedAt(new \DateTimeImmutable());

                // Sauvegarder l'historique du changement de pseudo
                $manager->persist($usernameHistory);
                $manager->flush(); // Assurez-vous que l'historique est bien persistant
            }

            // Maintenant, on met à jour l'entité 'User' avec le nouveau pseudo
            $choosenUser->setPseudo($newPseudo); // Appliquer le nouveau pseudo

            // Persist l'utilisateur avec le nouveau pseudo
            $manager->persist($choosenUser);
            $manager->flush(); // Sauvegarder l'utilisateur avec le pseudo modifié

            $this->addFlash(
                'success',
                'Les informations de votre compte ont bien été modifiées.'
            );

            return $this->redirectToRoute('user.edit', ['id' => $choosenUser->getId()]);
        }

        return $this->render('pages/user/edit.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Security("is_granted('ROLE_USER') and user === choosenUser")]
    #[Route('/utilisateur/edition-mot-de-passe/{id}', 'user.edit.password', methods: ['GET', 'POST'])]
    public function editPassword(
        User $choosenUser,
        Request $request,
        EntityManagerInterface $manager,
        UserPasswordHasherInterface $hasher
    ): Response {
        $form = $this->createForm(UserPasswordType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            if ($hasher->isPasswordValid($choosenUser, $form->getData()['plainPassword'])) {
                $choosenUser->setPassword(
                    $hasher->hashPassword(
                        $choosenUser,
                        $form->getData()['newPassword']
                    )
                );

                $this->addFlash(
                    'success',
                    'Le mot de passe a été modifié.'
                );

                $manager->persist($choosenUser);
                $manager->flush();

                return $this->redirectToRoute('user.edit.password', ['id' => $choosenUser->getId()]);
            } else {
                $this->addFlash(
                    'warning',
                    'Le mot de passe renseigné est incorrect.'
                );
            }
        }

        return $this->render('pages/user/edit_password.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
