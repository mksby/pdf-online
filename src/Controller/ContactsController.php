<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ContactsController extends AbstractController
{
    /**
    * @Route("/contacts")
    */
    public function number()
    {
        return $this->render('contacts.html.twig');
    }
}
