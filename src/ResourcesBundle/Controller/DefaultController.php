<?php

namespace ResourcesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ResourcesBundle:Default:index.html.twig');
    }
}
