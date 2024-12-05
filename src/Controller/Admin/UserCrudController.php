<?php

namespace App\Controller\Admin;

use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

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
            ->setPageTitle('index', 'Portfolio - Administration des utilisateurs');
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')
                ->hideOnForm()
                ->setSortable(true),
            TextField::new('email')
                ->setFormTypeOption('disabled', 'disabled')
                ->setSortable(false),
            TextField::new('fullName', 'Nom complet')
            ->setSortable(false),
            TextField::new('pseudo', 'Pseudonyme')
            ->setSortable(false),
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
                ->setSortable(true),
        ];
    }

    public function configureActions(Actions $actions): Actions
    {
        return $actions
            ->disable(Action::NEW);
    }
}