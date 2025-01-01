<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationType;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Karser\Recaptcha3Bundle\Validator\Constraints\Recaptcha3;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;




class SecurityController extends AbstractController
{
    #[Route('/connexion', name: 'security.login', methods: ['GET', 'POST'])]
    public function login(AuthenticationUtils $authenticationUtils, Request $request, ValidatorInterface $validator, ParameterBagInterface $params): Response
    {
        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();

        $recaptchaSiteKey = $_ENV['RECAPTCHA3_KEY'];

        if ($request->isMethod('POST')) {
            $isJsEnabled = $request->request->get('js_enabled');
            if ($isJsEnabled !== '1') {
                $this->addFlash('danger', 'JavaScript doit être activé pour se connecter.');
                return $this->redirectToRoute('security.login');
            }

            $recaptchaToken = $request->request->get('g-recaptcha-response');

            if (empty($recaptchaToken)) {
                $this->addFlash('danger', 'La vérification reCAPTCHA a échoué. Veuillez réessayer.');
                return $this->redirectToRoute('security.login');
            }

            $violations = $validator->validate($recaptchaToken, [
                new Recaptcha3(['action' => 'login']),
            ]);

            if (count($violations) > 0) {
                $this->addFlash('danger', 'La vérification reCAPTCHA a échoué. Veuillez réessayer.');
                return $this->redirectToRoute('security.login');
            }
        }

        return $this->render('pages/security/login.html.twig', [
            'last_username' => $lastUsername,
            'error' => $error,
            'recaptcha_site_key' => $recaptchaSiteKey,
        ]);
    }

    #[Route('/deconnexion', name: 'security.logout')]
    public function logout() {}

    #[Route('/inscription', 'security.registration', methods: ['GET', 'POST'])]
    public function registration(Request $request, EntityManagerInterface $manager): Response
    {
        $user = new User();
        $user->setRoles(['ROLE_USER']);
        $form = $this->createForm(RegistrationType::class, $user);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $user = $form->getData();

            $this->addFlash(
                'success',
                'Votre compte a bien été créé.'
            );
            $manager->persist($user);
            $manager->flush();

            return $this->redirectToRoute('security.login');
        }

        return $this->render('pages/security/registration.html.twig', [
            'form' => $form->createView()
        ]);
    }

    #[Route('/redirect-after-login', name: 'security.redirect_after_login')]
    public function redirectAfterLogin(Security $security): RedirectResponse
    {
        if ($security->isGranted('ROLE_ADMIN')) {
            return $this->redirectToRoute('admin');
        }

        return $this->redirectToRoute('home.index');
    }
}
