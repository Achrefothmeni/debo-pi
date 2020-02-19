<?php

namespace CommandeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ValidationController extends Controller
{
    public function validationAction(Request $request)
    {
        $session = $request->getSession();

        if (!$session->has('panier')) $session->set('panier', array());


        $em = $this->getDoctrine()->getManager();
        $article = $em->getRepository('ArticleBundle:Article')->findArray(array_keys($session->get('panier')));

        return $this->render('@Commande/panier/validation.html.twig', array('articles' => $article,
            'panier' => $session->get('panier')));

    }
}
