<?php

namespace App\Controller\Admin;

use App\Entity\Comment;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;

class CommentCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Comment::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInPlural('Liste des commentaires')
            ->setEntityLabelInSingular('un commentaire')
            ->setPageTitle('index', 'Portfolio - Administration des commentaires')
            ->setPageTitle('detail', 'Détail du commentaire');
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('user.pseudo', "Pseudonyme de l'utilisateur")
                ->setFormTypeOption('disabled', 'disabled')
                ->setSortable(false),
            TextField::new('content_comment', 'Commentaire')
                ->setFormTypeOption('disabled', 'disabled')
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
            ->add(Crud::PAGE_INDEX, $viewAction)
            ->disable(Action::EDIT)
            ->update(Crud::PAGE_INDEX, Action::DELETE, function (Action $action) {
                return $action;
            })
            ->disable(Action::NEW);
    }
}