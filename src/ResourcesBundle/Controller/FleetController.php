<?php

namespace ResourcesBundle\Controller;

use ResourcesBundle\Entity\Fleet;
use ResourcesBundle\Form\FleetType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;

class FleetController extends Controller
{

    public function afficherTableFleetAction()
    {
        $em=$this->getDoctrine()->getManager();
        $fleet = $em->getRepository("ResourcesBundle:Fleet")->findAll();
        return $this->render("@Resources/Fleet/afficherFleet.html.twig",array("fleet"=>$fleet));
    }
    public function supprimerAction($matriculation)
    {
        $em=$this->getDoctrine()->getManager();
        $fleet = $em->getRepository(Fleet::class)->find($matriculation);
        $em->remove($fleet);
        $em->flush();
        return $this->redirectToRoute('afficherFleet');
    }
    public function ajouterFleetAction(Request $request)
    {
        $fleet = new Fleet();
        $Form = $this->createForm(FleetType::class,$fleet);
        $Form->add('Ajouter', SubmitType::class);
        $Form->handleRequest($request);
        if ($Form->isSubmitted()) {
           $em = $this->getDoctrine()->getManager();
           $em->persist($fleet);
           $em->flush();
           return $this->redirectToRoute('afficherFleet');
        }
        return $this->render('@Resources/Fleet/ajouterFleet.html.twig',
        array('form' => $Form->createView()));
}
    function ModifierFleetAction($matriculation,Request $request)
    {
        $em= $this->getDoctrine()->getManager();
        $fleet= $em->getRepository(Fleet::class)->find($matriculation);
        $Form=$this->createForm(FleetType::class,$fleet);
        $Form->add('Modifier', SubmitType::class);
        $Form->handleRequest($request);
        if($Form->isSubmitted())
        {
            $em= $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute('afficherFleet');
        }
        return $this->render('@Resources/Fleet/ModifierFleet.html.twig',array('form'=>$Form->createView()));
    }


}
