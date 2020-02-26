<?php

namespace ReclamationBundle\Controller;

use Doctrine\DBAL\Types\TextType;
use ReclamationBundle\Entity\Reclamation;
use ReclamationBundle\Form\ReclamationType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;


class ReclamationController extends Controller
{

    public function showReclamationAction()
    {
        $em = $this->getDoctrine()->getManager();
        $reclamations = $em->getRepository('ReclamationBundle:Reclamation')->findAll();
        return $this->render('@Reclamation/Reclamations/afficherReclamation.html.twig', array(
            'reclamations' => $reclamations,
        ));
    }

    public function createReclamationAction(Request $request)
    {
        $reclamation = new Reclamation();
        $form = $this->createForm(ReclamationType::class,$reclamation);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($reclamation);
            $em->flush();
            return $this->redirectToRoute('reclamation_create');
        }
        return $this->render('@Reclamation/Reclamations/createReclamation.html.twig', array(
            'reclamation' => $reclamation,
            'form' => $form->createView(),
        ));
    }

    public function editAction(Request $request, Reclamation $reclamation, $id)
    {

        $status=$this->getDoctrine()->getRepository(Reclamation::class)->find($id);
        $status->setStatus("Processed");
        $em = $this->getDoctrine()->getManager();
        $em->persist($reclamation);
        $em->flush();

            return $this->redirectToRoute('reclamation_show', array('id' => $reclamation->getId()));
        }
    public function rechercheAction (Request $request, Reclamation $reclamation, $choix)
    {
        $em = $this->getDoctrine()->getManager();
        $rech = $em->getRepository('ReclamationBundle:Reclamation')->find($choix);
        return $this->render('@Reclamation/Reclamations/afficherReclamation.html.twig', array(
            'choix' => $rech,
        ));
    }
}

