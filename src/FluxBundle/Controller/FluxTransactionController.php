<?php

namespace FluxBundle\Controller;

use FluxBundle\Entity\FluxTransactions;
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

    public function afficherTransactionAction()
    {
        $transactions=$this->getDoctrine()
            ->getRepository(FluxTransactions::class)
            ->findAll();
        return $this->render('@Flux/Default/afficher_transaction.html.twig',
            array('transactions'=>$transactions));

    }
}
