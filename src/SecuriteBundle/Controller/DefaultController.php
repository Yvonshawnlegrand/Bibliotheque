<?php

namespace SecuriteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SecuriteBundle:Default:index.html.twig');
    }
}
