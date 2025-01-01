<?php
namespace App\Controller\Admin;

use App\Entity\User;
use App\Entity\Comment;
use App\Entity\Creation;
use Symfony\Component\HttpFoundation\Response;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Field\Field;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ArrayField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class StatCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Creation::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setPageTitle(Crud::PAGE_INDEX, 'Statistiques des créations')
            ->setPageTitle('detail', 'Détail des statistiques    la création')
            ->setSearchFields(['name']);
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('name', 'Nom de la création'),

            IntegerField::new('likesCount', 'Nombre de likes')
                ->setSortable(true),

            IntegerField::new('commentsCount', 'Nombre de commentaires')
                ->setSortable(true),
                
            AssociationField::new('likes', 'Utilisateurs ayant aimé')
                ->hideOnIndex()
                ->formatValue(function ($value, $entity) {
                    $users = $entity->getLikes()->map(function ($like) {
                        return $like->getUser()->getFullName();
                    })->toArray();

                    return count($users) > 0 ? implode("<br>", $users) : 'Aucun utilisateur';
                    }),

            AssociationField::new('comments', 'Utilisateurs ayant commenté')
                ->hideOnIndex()
                ->formatValue(function ($value, $entity) {
                    $users = $entity->getLikes()->map(function ($comment) {
                        return $comment->getUser()->getFullName();
                    })->toArray();

                    return count($users) > 0 ? implode("<br>", $users) : 'Aucun utilisateur';
                    })
                ];
    }

    public function configureActions(Actions $actions): Actions
    {
        $viewAction = Action::new('detail', 'Détail')
            ->linkToCrudAction(Crud::PAGE_DETAIL)
            ->setCssClass('btn btn-link');

        return $actions
            ->disable(Action::NEW)
            ->disable(Action::DELETE)
            ->disable(Action::EDIT)
            ->add(Crud::PAGE_INDEX, $viewAction);
    }

    public function configureFilters(Filters $filters): Filters
    {
        return $filters
            ->add('name', 'Nom de la création');
    }
}
