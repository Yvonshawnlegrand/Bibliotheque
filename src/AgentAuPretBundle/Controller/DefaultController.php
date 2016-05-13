<?php

namespace AgentAuPretBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AgentAuPretBundle:Default:index.html.twig');
    }
}
