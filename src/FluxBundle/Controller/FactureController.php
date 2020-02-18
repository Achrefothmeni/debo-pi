<?php

namespace FluxBundle\Controller;

use CommandeBundle\Entity\Commande;
use CommandeBundle\Entity\lignecommande;
use FluxBundle\Entity\Facture;
use FluxBundle\Entity\FluxTransactions;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Facture controller.
 *
 * @Route("facture")
 */
class FactureController extends Controller
{
    /**
     * Lists all facture entities.
     *
     * @Route("/", name="facture_index")
     * @Method("GET")
     */
    public function afficherFactureAction()
    {
        $em = $this->getDoctrine()->getManager();

        $factures = $em->getRepository(Facture::class)->findAll();

        return $this->render('facture/index.html.twig', array(
            'factures' => $factures,
        ));
    }

    /**
     * Lists all facture entities.
     *
     * @Route("/generer_facture", name="genererfacture")
     * @Method("GET")
     */



}
