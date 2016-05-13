<?php

namespace LecteursBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('LecteursBundle:Default:index.html.twig');
    }
}
