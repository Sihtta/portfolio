<?php

namespace App\Controller\Admin;

use App\Entity\Creation;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use FOS\CKEditorBundle\Form\Type\CKEditorType;

class CreationCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Creation::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInPlural('Liste des créations')
            ->setEntityLabelInSingular('une oeuvre')
            ->setPageTitle('index', 'Portfolio - Administration des créations')
            ->addFormTheme('@FOSCKEditor/Form/ckeditor_widget.html.twig');
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('ID')
                ->hideOnForm()
                ->setSortable(true),
            TextField::new('Name', 'Nom')
            ->setSortable(true),
            // Si ça ne marche pas, modifiez extension=zip (enlevez le ";") dans C:\xampp\php\php.ini
            // Documentation : https://symfony.com/bundles/FOSCKEditorBundle/current/installation.html
            TextEditorField::new('Description')
                ->setFormType(CKEditorType::class)
                ->setSortable(false),
            TextField::new('Image', "Lien de l'image")
            ->setSortable(false),
            DateTimeField::new('created_at', 'Date de création')
            ->setSortable(true),
        ];
    }
}