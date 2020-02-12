<?php

namespace LivraisonBundle\Controller;

use LivraisonBundle\Entity\Livraison;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LivraisonController extends Controller
{
    public function listeLivraisonAction()
    {
        $livraisons=$this->getDoctrine()
            ->getRepository(Livraison::class)
            ->findAll();

        return $this->render('@Livraison/Default/listeLivraison.html.twig', array('livraisons' => $livraisons));
    }
}
