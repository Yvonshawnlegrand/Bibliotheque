<?php

namespace ConservateurBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ConservateurBundle:Default:index.html.twig');
    }
}
