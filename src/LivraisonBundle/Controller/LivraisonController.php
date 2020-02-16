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
        $livraison->setDateDepart(new \DateTime());
        $livraison->setStatus("En attente");
        $em=$this->getDoctrine()->getManager();
        $commandes=$request->request->get('commandes');
        $em->persist($livraison);
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


}
