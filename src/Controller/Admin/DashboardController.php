<?php

namespace App\Controller\Admin;

use App\Entity\Tool;
use App\Entity\User;
use App\Entity\Comment;
use App\Entity\Contact;
use App\Entity\Category;
use App\Entity\Creation;

use App\Entity\UsernameHistory;
use App\Controller\Admin\StatCrudController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;


class DashboardController extends AbstractDashboardController
{
    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
        if ($this->getUser()) {
            if (count($this->getUser()->getRoles()) == 1) {
                return $this->redirectToRoute('home.accessdenied');
            } else return $this->render('admin/dashboard.html.twig');
        } else return $this->redirectToRoute('security.login');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Portfolio - Administration')
            ->renderContentMaximized();
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::section('Accueil du dashboard');
        yield MenuItem::linkToDashboard('Accueil', 'fa fa-home');

        yield MenuItem::section('Gestion des utilisateurs');
        yield MenuItem::linkToCrud('Utilisateurs', 'fas fa-circle-user', User::class);
        yield MenuItem::linkToCrud('Historiques pseudonymes', 'fas fa-history', UsernameHistory::class);
        yield MenuItem::linkToCrud('Messages', 'fa fa-envelope', Contact::class);


        yield MenuItem::section('Gestion du contenu');
        yield MenuItem::linkToCrud('Creations', 'fas fa-image', Creation::class)
           ->setController(CreationCrudController::class);
        yield MenuItem::linkToCrud('Commentaires', 'fas fa-comment', Comment::class);
        yield MenuItem::linkToCrud('Categories', 'fas fa-list', Category::class);
        yield MenuItem::linkToCrud('Outils', 'fas fa-pencil', Tool::class);

        yield MenuItem::section('Statistiques');
        yield MenuItem::linkToCrud('Statistiques des créations', 'fa fa-chart-bar', Creation::class)
            ->setController(StatCrudController::class);

    }
}
