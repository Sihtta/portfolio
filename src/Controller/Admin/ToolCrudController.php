<?php

namespace App\Controller\Admin;

use App\Entity\Tool;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use EasyCorp\Bundle\EasyAdminBundle\Field\ArrayField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;

class ToolCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Tool::class;
    }

    public function configureCrud(Crud $crud): Crud {
        return $crud
        ->setEntityLabelInPlural('Liste des outils')
            ->setEntityLabelInSingular('un outil')
            ->setPageTitle('index','Portfolio - Administration des outils')
            ->addFormTheme('@FOSCKEditor/Form/ckeditor_widget.html.twig')
            ->setPageTitle('detail', 'Détail de l\'outil')
            ->setSearchFields(['name']);
    }

    public function configureFields(string $pageName): iterable
    {
        $fields = [
            TextField::new('name', 'Nom')
            ->setSortable(true),
            TextEditorField::new('Description')
                ->setFormType(CKEditorType::class)
                ->setSortable(false)
                ->setFormTypeOptions([
                    'attr' => ['style' => 'width: 400px;'],
                    'config' => [
                        'toolbar' => 'standard',
                        'width' => '400',
                    ],
                ]),
            TextField::new('reference', 'Référence')
            ->setSortable(false),
            DateTimeField::new('created_at', 'Date de création')
            ->setFormTypeOption('disabled','disabled')
            ->setSortable(true)
            ->formatValue(function ($value, $entity) {
                return $value instanceof \DateTimeInterface ? $value->format('d/m/Y') : '';
            }),
        ];
        if ($pageName != Crud::PAGE_DETAIL) {
            $fields[] = AssociationField::new('creations', 'Créations')
                ->setSortable(true);
        }
        if ($pageName === Crud::PAGE_DETAIL) {
            $fields[] = ArrayField::new('creations', 'Liste des œuvres')
                ->formatValue(function ($creations) {
                    if ($creations === null || count($creations) === 0) {
                        return 'Aucune œuvre';
                    }
                    return implode("\n", array_map(fn($creation) => $creation->getName(), $creations->toArray()));
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
            ->add(Crud::PAGE_INDEX, $viewAction);
    }
}