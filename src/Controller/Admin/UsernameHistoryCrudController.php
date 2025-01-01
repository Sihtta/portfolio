<?php

namespace App\Controller\Admin;

use App\Entity\UsernameHistory;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Filter\EntityFilter;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class UsernameHistoryCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return UsernameHistory::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInPlural('Historiques des pseudonymes')
            ->setEntityLabelInSingular('Historique des pseudonymes')
            ->setPageTitle('index', 'Historique des pseudonymes')
            ->setDefaultSort(['changedAt' => 'DESC']);
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('oldPseudo', 'Ancien pseudonyme'),
            TextField::new('newPseudo', 'Nouveau pseudonyme'),
            DateTimeField::new('changedAt', 'Date de changement')
                ->setFormat('d/M/Y'),
        ];
    }

    public function configureActions(Actions $actions): Actions
    {
        return $actions
            ->disable(Action::NEW)
            ->disable(Action::EDIT);
    }

    public function configureFilters(Filters $filters): Filters
    {
        return $filters
            ->add(EntityFilter::new('user', 'Nouveau pseudonyme'))
            ->add('oldPseudo', 'nom');
    }
}
