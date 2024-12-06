<?php

namespace App\Controller\Admin;

use App\Entity\User;
use App\Entity\Comment;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ArrayField;

class UserCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return User::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInPlural('Liste des utilisateurs')
            ->setEntityLabelInSingular('un utilisateur')
            ->setPageTitle('index', 'Portfolio - Administration des utilisateurs')
            ->setPageTitle('detail', 'Détail de l\'utilisateur');
    }

    public function configureFields(string $pageName): iterable
{
    $fields = [
        TextField::new('pseudo', 'Pseudonyme')->setSortable(true),
        TextField::new('fullName', 'Nom complet')->setSortable(false),
        TextField::new('email')->setFormTypeOption('disabled', 'disabled')->setSortable(false),
        ChoiceField::new('roles', 'Rôles')
            ->setChoices([
                'Utilisateur' => 'ROLE_USER',
                'Administrateur' => 'ROLE_ADMIN',
                'Modérateur' => 'ROLE_MODERATOR',
            ])
            ->allowMultipleChoices()
            ->renderExpanded()
            ->hideOnIndex(),
        DateTimeField::new('createdAt', 'Date de création')
            ->setFormTypeOption('disabled', 'disabled')
            ->setSortable(true)
            ->formatValue(function ($value, $entity) {
                return $value instanceof \DateTimeInterface ? $value->format('d/m/Y') : '';
            }),
    ];

    if ($pageName === Crud::PAGE_DETAIL) {
        $fields[] = ArrayField::new('comments', 'Commentaires')
            ->formatValue(function ($comments) {
                if ($comments === null || count($comments) === 0) {
                    return 'Aucun commentaire';
                }
                return implode("\n", array_map(function ($comment) {
                    return $comment instanceof Comment ? $comment->getContentComment() : 'Commentaire invalide';
                }, $comments->toArray()));
            });
    }
        return $fields;
    }

    public function configureActions(Actions $actions): Actions
    {
        $viewAction = Action::new('detail', 'Détail')
            ->linkToCrudAction(Crud::PAGE_DETAIL)
            ->setCssClass('btn btn-link');

        return $actions
            ->add(Crud::PAGE_INDEX, $viewAction)
            ->disable(Action::NEW);
    }
}
