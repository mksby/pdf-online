<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class IssueController extends AbstractController
{
    /**
    * @Route("/issue")
    */
    public function number()
    {
        return $this->render('issue.html.twig');
    }
}
