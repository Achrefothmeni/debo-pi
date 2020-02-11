<?php

namespace FluxBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('FluxBundle:Default:index.html.twig');
    }
}
