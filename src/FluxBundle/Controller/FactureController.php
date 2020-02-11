<?php

namespace FluxBundle\Controller;

use FluxBundle\Entity\Facture;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FactureController extends Controller
{
    public function indexAction()
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
            return $this->render('@Facture/Facture/AjoutFacture.html.twig',
                array('f'=>$Form->createView()));
        }
    }
}
