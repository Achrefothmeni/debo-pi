<?php

namespace FluxBundle\Controller;

use ArticleBundle\Controller\ArticleController;
use CommandeBundle\Controller\CommandeController;
use FluxBundle\Entity\Facture;
use FluxBundle\Entity\FluxTransactions;
use CommandeBundle\Entity\Commande;
use ArticleBundle\Entity\Article;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FluxTransactionController extends Controller
{
    public function transactionsAction($type, $somme)
    {
        $em=$this->getDoctrine()->getManager();
        $transaction = new FluxTransactions($type, $somme);
        $em->persist($transaction);
        $em->flush();
        return new Response('Transaction efffectuée avec succès');

    }

    public function fluxHomeAction()
    {
        $transactions=$this->getDoctrine()
            ->getRepository(FluxTransactions::class)
            ->findAll();
        $commandes=$this->getDoctrine()
            ->getRepository(Commande::class)
            ->findAll();
        return $this->render('@Flux/Default/afficher_caisse.html.twig',
            array('transactions'=>$transactions,
            'commandes'=> $commandes));
    }

    public function factureAction()
    {
        $articles=$this->getDoctrine()
            ->getRepository(Article::class)
            ->findAll();
        $commandes=$this->getDoctrine()
            ->getRepository(Commande::class)
            ->findAll();

        return $this->render('@Flux/Default/afficherfacture.html.twig',
            array('articles'=>$articles,
                'commandes'=> $commandes));
    }





}
