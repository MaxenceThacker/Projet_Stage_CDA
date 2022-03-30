<?php

namespace App\Controller\Admin;

use App\Entity\Alternants;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class AlternantsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Alternants::class;
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
