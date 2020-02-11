<?php

namespace FluxBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ligneFactureController extends Controller
{

    function AjoutAction(Request $request){
        $facture=new Facture();
        $Form=$this->createForm(FactureType::class,$facture);
        $Form->handleRequest($request);
        if($Form->isSubmitted()){
            $em=$this->getDoctrine()->getManager();
            $em->persist($facture);
            $em->flush();
        }
        return $this->render('@Facture/Facture/Ajout.html.twig',
            array('f'=>$Form->createView()));
    }

}