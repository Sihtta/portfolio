<?php

namespace App\Controller\Admin;

use App\Entity\Category;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ArrayField;

class CategoryCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Category::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInPlural('Liste des catégories')
            ->setEntityLabelInSingular('Une catégorie')
            ->setPageTitle('index', 'Portfolio - Administration des catégories')
            ->setPageTitle('detail', 'Détail de la catégorie')
            ->setSearchFields(['name']);
    }

    public function configureFields(string $pageName): iterable
    {
        $fields = [
            TextField::new('name', 'Nom')
                ->setSortable(true),
        ];

        if ($pageName === Crud::PAGE_DETAIL) {
            $fields[] = ArrayField::new('creations', 'Liste des œuvres')
                ->formatValue(function ($creations) {
                    if ($creations === null || count($creations) === 0) {
                        return 'Aucune œuvre';
                    }
                    return implode("\n", array_map(fn($creation) => $creation->getName(), $creations->toArray()));
                });
        }

        if ($pageName != Crud::PAGE_DETAIL) {
            $fields[] = AssociationField::new('creations', 'Créations')
                ->setSortable(true);
        }

        return $fields;
    }

    public function configureActions(Actions $actions): Actions
    {
        $viewAction = Action::new('detail', 'Détail')
            ->linkToCrudAction(Crud::PAGE_DETAIL)
            ->setCssClass('btn btn-link');

        return $actions
            ->add(Crud::PAGE_INDEX, $viewAction);
    }
}