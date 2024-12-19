<?php

namespace App\Controller\Admin;

use App\Entity\Contact;
use Doctrine\ORM\QueryBuilder;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Context\AdminContext;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Dto\SearchDto;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\EmailField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Doctrine\Persistence\ManagerRegistry;
use EasyCorp\Bundle\EasyAdminBundle\Dto\EntityDto;
use EasyCorp\Bundle\EasyAdminBundle\Collection\FieldCollection;
use EasyCorp\Bundle\EasyAdminBundle\Collection\FilterCollection;

class ContactCrudController extends AbstractCrudController
{
    private ManagerRegistry $doctrine;

    public function __construct(ManagerRegistry $doctrine)
    {
        $this->doctrine = $doctrine;
    }

    public static function getEntityFqcn(): string
    {
        return Contact::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('Message')
            ->setEntityLabelInPlural('Messages')
            ->setPageTitle(Crud::PAGE_INDEX, 'Gestion des Messages')
            ->setDefaultSort(['createdAt' => 'DESC']);
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('fullName', 'Nom / Prénom')->setSortable(true),
            EmailField::new('email', 'Email'),
            TextField::new('subject', 'Sujet')->setSortable(false),
            DateTimeField::new('createdAt', 'Reçu le')->setSortable(true),
            TextareaField::new('message', 'Message')->onlyOnDetail(),
            BooleanField::new('archived', 'Archivé')
                ->renderAsSwitch(false)
                ->setFormTypeOption('disabled', false),
        ];
    }

    public function configureActions(Actions $actions): Actions
    {
        $archiveAction = Action::new('archive', 'Archiver')
            ->linkToCrudAction('archiveMessage')
            ->setCssClass('btn btn-link')
            ->setIcon(null);

        return $actions
            ->disable(Action::NEW, Action::DELETE)
            ->add(Crud::PAGE_INDEX, $archiveAction)
            ->add(Crud::PAGE_DETAIL, $archiveAction)
            ->add(Crud::PAGE_INDEX, Action::DETAIL);
    }

    public function archiveMessage(AdminContext $context): RedirectResponse
    {
        $entity = $context->getEntity()->getInstance();

        if ($entity instanceof Contact) {
            $entity->setArchived(true);
            $this->doctrine->getManager()->flush();
        }

        return $this->redirectToRoute('admin', [
            'crudControllerFqcn' => ContactCrudController::class,
            'crudAction' => 'index',
        ]);
    }

    public function configureFilters(Filters $filters): Filters
    {
        return $filters
            ->add('archived');
    }

    public function createIndexQueryBuilder(
        SearchDto $searchDto,
        EntityDto $entityDto,
        FieldCollection $fields,
        FilterCollection $filters
    ): QueryBuilder {
        $qb = parent::createIndexQueryBuilder($searchDto, $entityDto, $fields, $filters);
        return $qb;
    }
}
