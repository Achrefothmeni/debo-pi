<?php

namespace CommandeBundle\Controller;

use ArticleBundle\Entity\Article;
use CommandeBundle\Entity\lignecommande;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class CommandeController extends Controller
{

        public function afficherAction(Request $request)
    {
        $id = $request->get('id');
        $article=$this->getDoctrine()
            ->getRepository(Article::class)
            ->find($id);

        $commandelignes=$this->getDoctrine()
            ->getRepository(lignecommande::class)
            ->findAll();
        return $this->render('@Commande/pannier/panier.html.twig',
            array('commandelignes'=>$commandelignes, 'a'=>$article));
    }


}
