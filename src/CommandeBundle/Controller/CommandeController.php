<?php

namespace CommandeBundle\Controller;

use ArticleBundle\Entity\Article;
use AuthBundle\Entity\User;
use CommandeBundle\Entity\Commande;
use CommandeBundle\Entity\lignecommande;
use CommandeBundle\Form\lignecommandeType;
use FluxBundle\Entity\FluxTransactions;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use DateTime;

class CommandeController extends Controller
{
    public function PutInSessionAction(Request $request, $id)
    {

        $user = $this->get('security.token_storage')->getToken()->getUser();

        $session = $request->getSession();

        if ($session->has('panier'))

            $panier = $session->get('panier');

        $commande = new Commande();
        $em = $this->getDoctrine()->getManager();

        $produit = $em->getRepository("ArticleBundle:Article")->findArray(array_keys($session->get('panier')/*'id' => $panier*/));
        $form = $this->createForm(lignecommandeType::class,$commande );
        $form->handleRequest($request);
        if ($form->isValid()) {
            $this->get('session')->set('idprod', $produit);
            $this->get('session')->set('prixtotal', $id);

            $this->get('session')->set('addresse', $commande->getAdresse());



            return $this->redirectToRoute('ajout_ligne_commande');

        }
        return $this->render("@Commande/CommandeFront/ajoutcommande.html.twig",
            array('produit' => $produit, 'commande' => $commande, 'form' => $form->createView()));
    }


    public function AjoutLigneDeCommandeAction(Request $request)
    {
        $session = $request->getSession();


        $user = $this->get('security.token_storage')->getToken()->getUser();

        $dateCommande = new \DateTime();



        $datmax = new DateTime('+ 5 minute');

        $commande = new Commande();

        $this->get('session')->set('datmax', $datmax);

        $em = $this->getDoctrine()->getManager();
        $commande->setDateCommande($dateCommande);
        $commande->setDateMax($datmax);
        $commande->setIdUser($user);
        $commande->setAdresse($request->request->get('adresse'));
        $em->persist($commande);
        $em->flush();
        $panier = $this->get('session')->get('panier');

        $commande = $em->getRepository("CommandeBundle:Commande", $user)->findOneBy(array('idUser' => $user->getId()), array('id' => 'DESC'));
        $prod = $em->getRepository("ArticleBundle:Article")->findArray(array_keys($session->get('panier')));
        $i = 0;

        ksort($panier);

        foreach ($prod as $p) {
            $lcommande = new lignecommande();



$somme=0;
            $lcommande->setIdProduit($p);
            $lcommande->setPrixTotal(array_values($panier)[$i] * $p->getPrice());
            $somme+=$lcommande->getPrixTotal();
            $lcommande->setQuntite(array_values($panier)[$i]);
            $p->setQuantity($p->getQuantity() - $lcommande->getQuntite());

            $lcommande->setIdCommande($commande);


            $em->persist($lcommande);
            $em->flush();
            $i++;
            $em = $this->getDoctrine()->getManager();
            $commande = $em->getRepository("CommandeBundle:Commande", $user)->findOneBy(array('idUser' => $user->getId()), array('id' => 'DESC'));


        }

        $commande->setSumme($somme);
        $transaction = new FluxTransactions('C', $somme);
        $em->persist($transaction);

        $em->flush();
        unset($panier);
        return $this->redirectToRoute('afficher_commande');

        return $this->render("@Commande/CommandeFront/affichecommande.html.twig",array('lcommande' => $lcommande));

    }

    public function afficherCommandeAction()
    {


        $user = $this->get('security.token_storage')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();
        $commande = $em->getRepository("CommandeBundle:Commande")->findby(array('idUser' => $user->getId()));


        return $this->render("@Commande/CommandeFront/affichecommande.html.twig",array('lcommande' => $commande));
    }

    public function afficherCommandebackAction()
    {
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $clients=$this->getDoctrine()
        ->getRepository(User::class)
        ->findByRole('ROLE_CLIENT');

        $em = $this->getDoctrine()->getManager();
        $commande = $em->getRepository("CommandeBundle:Commande")->findAll();
        return $this->render("@Commande/CommandeFront/afficheback.html.twig",array('lcommande' => $commande, 'clients'=>$clients));
    }

    public function searchCommandeAction(Request $request){

        $em = $this->getDoctrine()->getManager();

        $clients=$this->getDoctrine()
            ->getRepository(User::class)
            ->findByRole('ROLE_CLIENT');

        $client= $this->getDoctrine()
            ->getRepository(User::class)
            ->find($request->request->get('client'));

        $commande = $em->getRepository("CommandeBundle:Commande")->findBy(array('idUser'=>$client));
        return $this->render("@Commande/CommandeFront/afficheback.html.twig",array('lcommande' => $commande, 'clients'=>$clients));

    }

    public function AfficherLigneDeCommandeAction($id)
    {

        $em = $this->getDoctrine()->getManager();

        $lcommande = $em->getRepository("CommandeBundle:lignecommande")->findby(array('idCommande' => $id));


        $datesys = new DateTime();


        return $this->render("@Commande/CommandeFront/affichelignecommande.html.twig", array(
            'lst' => $lcommande, 'datesys' => $datesys));
    }
}
