<?php

namespace EeoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('EeoBundle:Default:index.html.twig');
    }
}
