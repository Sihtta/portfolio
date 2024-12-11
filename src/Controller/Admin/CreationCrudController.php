<?php

namespace App\Controller\Admin;

use App\Entity\Creation;
use App\Entity\Comment;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use EasyCorp\Bundle\EasyAdminBundle\Field\ArrayField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use Vich\UploaderBundle\Form\Type\VichImageType;

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
            ->setPageTitle('detail', 'Détail de la création')
            ->setSearchFields(['name']);
    }

    public function configureFields(string $pageName): iterable
    {
        $fields = [
            TextField::new('Name', 'Nom')
                ->setSortable(true),
            
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

            ImageField::new('image_file', "Image")
                ->onlyOnForms()
                ->setUploadDir('public/images')
                ->setBasePath('public/images')
                ->setUploadedFileNamePattern('[year]-[month]-[day]-[contenthash].[extension]')
                ->setFormTypeOption('multiple', true),

            ImageField::new('imageName', 'Image')
                ->setBasePath('/images')
                ->onlyOnIndex()
                ->setSortable(false),
            
            DateTimeField::new('createdAt', 'Date de création')
                ->setFormTypeOption('disabled', 'disabled')
                ->setSortable(true)
                ->formatValue(function ($value, $entity) {
                    return $value instanceof \DateTimeInterface ? $value->format('d/m/Y') : '';
                }),
        ];

        if ($pageName !== Crud::PAGE_DETAIL) {
            $fields[] = AssociationField::new('Tool', 'Outils')
                ->setSortable(true);
            
            $fields[] = AssociationField::new('category', 'Catégories')
                ->setSortable(true);
        }

        if ($pageName === Crud::PAGE_DETAIL) {
            $fields[] = AssociationField::new('Tool', 'Outils utilisés')
                ->formatValue(function ($tools) {
                    if (!$tools || count($tools) === 0) {
                        return 'Aucun outil';
                    }
                    return implode(', ', array_map(fn($tool) => $tool->getName(), $tools->toArray()));
            });

            $fields[] = AssociationField::new('category', 'Catégories associées')
                ->formatValue(function ($categories) {
                    if (!$categories || count($categories) === 0) {
                        return 'Aucune catégorie';
                    }
                    return implode(', ', array_map(fn($category) => $category->getName(), $categories->toArray()));
            });

            $fields[] = AssociationField::new('likes', 'Nombre de likes')
            ->formatValue(function ($likes) {
                return $likes instanceof \Doctrine\Common\Collections\Collection ? $likes->count() : 0;
            });

            $fields[] = ArrayField::new('comments', 'Commentaires associés')
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
            ->add(Crud::PAGE_INDEX, $viewAction);
    }
}
