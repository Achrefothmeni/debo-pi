<?php

namespace FluxBundle\Controller;

use FluxBundle\Entity\Facture;
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
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $factures = $em->getRepository('FluxBundle:Facture')->findAll();

        return $this->render('facture/index.html.twig', array(
            'factures' => $factures,
        ));
    }

    public function afficherAction(Facture $facture)
    {

        return $this->render('facture/afficher.html.twig', array(
            'facture' => $facture,
        ));
    }
}
