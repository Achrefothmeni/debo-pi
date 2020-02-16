<?php

namespace FluxBundle\Controller;

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

    public function genererFactureAction($prixTotal)
    {
        $em=$this->getDoctrine()->getManager();
        $facture = new FluxTransactions($prixTotal);
        $em->persist($facture);
        $em->flush();
        return new Response('Facture générée avec succès');

    }


}
