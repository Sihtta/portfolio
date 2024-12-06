<?php

namespace App\Controller\Admin;

use App\Entity\Category;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;

class CategoryCrudController extends AbstractCrudController
{
    public function configureActions(Actions $actions): Actions
    {
        return $actions
            ->add(Crud::PAGE_INDEX, 'show');
    }

    public static function getEntityFqcn(): string
    {
        return Category::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInPlural('Liste des catégories')
            ->setEntityLabelInSingular('une catégorie')
            ->setPageTitle('index', 'Portfolio - Administration des catégories');
    }

    public function configureFields(string $pageName): iterable
    {
        $fields = [
            TextField::new('name', 'Nom')
                ->setSortable(true),
        ];

        if ($pageName === Crud::PAGE_SHOW) {
            $fields[] = IdField::new('id', 'Identifiant');
            $fields[] = TextEditorField::new('description', 'Description');
        }

        return $fields;
    }
}