<?php

namespace DashboardBundle\Controller;

use ArticleBundle\Entity\Article;
use CommandeBundle\Entity\Commande;
use FluxBundle\Entity\FluxTransactions;
use LivraisonBundle\Entity\Livraison;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $livraisons=$this->getDoctrine()
            ->getRepository(Livraison::class)
            ->findAll();
        $articles=$this->getDoctrine()
            ->getRepository(Article::class)
            ->findAll();
        $transactions=$this->getDoctrine()
            ->getRepository(FluxTransactions::class)
            ->findAll();
        $commandes=$this->getDoctrine()
            ->getRepository(Commande::class)
            ->findAll();
        $nbLivraisons = 0;
        $nbArticles = 0;
        $nbCommandes = 0;
        $revenue = 0;
        foreach ($livraisons as $l){
            $nbLivraisons++;
        }
        foreach ($commandes as $l){
            $nbCommandes++;
        }
        foreach ($articles as $l){
            $nbArticles++;
        }
        foreach ($transactions as $t){
            if($t->getNature()=='C')
                $revenue=+$t->getSomme();
            else
                $revenue-=$t->getSomme();
        }
        return $this->render('@Dashboard/Default/index.html.twig', array(
            'nbLivraisons' => $nbLivraisons,
            'nbCommandes' => $nbCommandes,
            'nbArticles' => $nbArticles,
            'revenue' => $revenue
        ));
    }
}
