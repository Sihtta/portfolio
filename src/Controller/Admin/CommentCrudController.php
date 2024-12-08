<?php

namespace App\Controller\Admin;

use App\Entity\Comment;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
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
            ->setPageTitle('detail', 'Détail du commentaire')
            ->setSearchFields(['user.pseudo', 'contentComment']);
    }

    public function configureFields(string $pageName): iterable
    {
        $fields = [
            TextField::new('user.pseudo', "Pseudonyme de l'utilisateur")
                ->setFormTypeOption('disabled', 'disabled')
                ->setSortable(false),
                $fields[] = TextField::new('creation.name', "Nom de la création")->setSortable(false),
            TextField::new('contentComment', 'Commentaire')
                ->setFormTypeOption('disabled', 'disabled')
                ->setSortable(false),
            DateTimeField::new('createdAt', 'Date du commentaire')
                ->setSortable(true)
                ->formatValue(function ($value, $entity) {
                    return $value instanceof \DateTimeInterface ? $value->format('d/m/Y') : '';
            })
        ];
        return $fields;
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