<?php

namespace LivraisonBundle\Controller;

use AuthBundle\Entity\User;
use CommandeBundle\Entity\Commande;
use LivraisonBundle\Entity\Livraison;
use LivraisonBundle\Entity\LivraisonCommande;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class LivraisonController extends Controller
{
    public function listeLivraisonAction()
    {
        $livraisons=$this->getDoctrine()
            ->getRepository(Livraison::class)
            ->findAll();
        $commandes=$this->getDoctrine()
            ->getRepository(Commande::class)
            ->findBy(array('status'=>'En attente'));

        $livreurs=$this->getDoctrine()
            ->getRepository(User::class)
            ->findByRole('ROLE_DELIVERY_MANAGER');


        return $this->render('@Livraison/Default/listeLivraison.html.twig', array('livraisons' => $livraisons,
            'commandes' => $commandes,
            'livreurs' => $livreurs));
    }

    public function ajouterLivraisonAction(Request $request) {
        $livraison = new Livraison();
        $livreur=$this->getDoctrine()
            ->getRepository(User::class)
            ->find($request->request->get('livreur'));
        $livraison->setLivreur($livreur);
        $livreur->setStatus("Non disponible");
        $livraison->setDateDepart(new \DateTime());
        $livraison->setStatus("En attente");
        $em=$this->getDoctrine()->getManager();
        $commandes=$request->request->get('commandes');
        $em->persist($livraison);
        $twilio = $this->get('twilio.api');
        $tel = $livreur->getNum();
        $msg = "livraison est ".$livraison->getStatus();


        $message = $twilio->account->messages->sendMessage(
            '+13345106423', // From a Twilio number in your account
            '+21650802348', // Text any number
            $msg
        );
        $em->flush();
        foreach ($commandes as $commande_id){
            $id = explode(" ",$commande_id);
            $commande=$this->getDoctrine()
                ->getRepository(Commande::class)
                ->find($id[2]);
            $livraisonCommande = new LivraisonCommande();
            $livraisonCommande->setCommande($commande);
            $livraisonCommande->setLivraison($livraison);
            $em->persist($livraisonCommande);
            $em->flush();
        }

        return $this->redirectToRoute('liste_livraison');

    }

    public function viewSingleLivraisonAction($id) {
        $livraison=$this->getDoctrine()
            ->getRepository(Livraison::class)
            ->find($id);
        return $this->render('@Livraison/Default/singleLivraison.html.twig', array('livraison' => $livraison));
    }

    public function updateSingleLivraisonAction($id, Request $request) {
        $livraison=$this->getDoctrine()
            ->getRepository(Livraison::class)
            ->find($id);

        $livraison->setStatus($request->request->get("status"));

        $livraison->getLivreur()->setStatus("Disponible");
        $em=$this->getDoctrine()->getManager();
        $em->flush();
        return $this->render('@Livraison/Default/singleLivraison.html.twig', array('livraison' => $livraison));
    }

    public function viewLivraisonByStatusAction($status){
        $livraisons=$this->getDoctrine()
            ->getRepository(Livraison::class)
            ->findBy(array('status'=>$status));
        $commandes=$this->getDoctrine()
            ->getRepository(Commande::class)
            ->findBy(array('status'=>'En attente'));
        $livreurs=$this->getDoctrine()
            ->getRepository(User::class)
            ->findByRole('ROLE_DELIVERY_MANAGER');
        return $this->render('@Livraison/Default/liste_livraison_by_status.html.twig', array('livraisons' => $livraisons,
            'commandes' => $commandes,
            'livreurs' => $livreurs));
    }

}
