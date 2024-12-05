<?php

namespace App\Controller\Admin;

use App\Entity\Tool;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use FOS\CKEditorBundle\Form\Type\CKEditorType;

class ToolCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Tool::class;
    }

    public function configureCrud(Crud $crud): Crud {
        return $crud
        ->setEntityLabelInPlural('Liste des outils')
            ->setEntityLabelInSingular('outils')
            ->setPageTitle('index','Portfolio - Administration des outils')
            ->addFormTheme('@FOSCKEditor/Form/ckeditor_widget.html.twig');
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('ID')
            ->setFormTypeOption('disabled','disabled'),
            TextField::new('name', 'Nom'),
            TextEditorField::new('Description')
                ->setFormType(CKEditorType::class),
            TextField::new('reference', 'Référence'),
            DateTimeField::new('created_at', 'Date de création')
            ->setFormTypeOption('disabled','disabled'),
        ];
    }
}