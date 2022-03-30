<?php

namespace App\Controller\Admin;

use App\Entity\Absences;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class AbsencesCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Absences::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
