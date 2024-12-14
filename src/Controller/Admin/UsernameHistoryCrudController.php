<?php

namespace App\Controller\Admin;

use App\Entity\UsernameHistory;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

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
            TextField::new('user.pseudo', 'Utilisateur'),
            TextField::new('oldPseudo', 'Ancien pseudo'),
            TextField::new('newPseudo', 'Nouveau pseudo'),
            DateTimeField::new('changedAt', 'Date de changement')
                ->setFormat('d/M/Y à H:i'),
        ];
    }
}
