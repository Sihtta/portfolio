<?php

namespace App\Controller\Admin;

use App\Entity\Creation;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
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
            ->addFormTheme('@FOSCKEditor/Form/ckeditor_widget.html.twig')
            ->setPageTitle('detail', 'Détail de la création');
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('Name', 'Nom')
            ->setSortable(true),
            // Si ça ne marche pas, modifiez extension=zip (enlevez le ";") dans C:\xampp\php\php.ini
            // Documentation : https://symfony.com/bundles/FOSCKEditorBundle/current/installation.html
            TextEditorField::new('Description')
                ->setFormType(CKEditorType::class)
                ->setFormTypeOptions([
                    'attr' => ['style' => 'width: 400px;'],
                    'config' => [
                        'toolbar' => 'standard',
                        'width' => '400',
                    ],
                ])
                ->setSortable(false),
            TextField::new('Image', "Lien de l'image")
                ->setSortable(false),
            AssociationField::new('Tool', 'Outils')
                ->setSortable(false),
            DateTimeField::new('createdAt', 'Date de création')
                ->setFormTypeOption('disabled', 'disabled')
                ->setSortable(true)
                ->formatValue(function ($value, $entity) {
                    return $value instanceof \DateTimeInterface ? $value->format('d/m/Y') : '';
                }),
        ];
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