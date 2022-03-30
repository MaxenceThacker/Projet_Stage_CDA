<?php

namespace App\Controller\Admin;

use App\Entity\Centres;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class CentresCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Centres::class;
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
