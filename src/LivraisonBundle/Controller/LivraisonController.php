<?php

namespace LivraisonBundle\Controller;

use LivraisonBundle\Entity\Livraison;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LivraisonController extends Controller
{
    public function listeLivraisonAction()
    {
        $users=$this->getDoctrine()
            ->getRepository(Livraison::class)
            ->findAll();

        return $this->render('@Auth/Default/liste_utilisateur.html.twig', array('users' => $users));
    }


}
