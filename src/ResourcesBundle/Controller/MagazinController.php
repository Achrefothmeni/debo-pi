<?php

namespace ResourcesBundle\Controller;

use ResourcesBundle\Entity\Magazin;
use ResourcesBundle\Form\MagazinType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;

class MagazinController extends Controller
{
    public function afficherTableMagazinAction()
    {
        $em=$this->getDoctrine()->getManager();
        $magazin = $em->getRepository("ResourcesBundle:Magazin")->findAll();
        return $this->render("@Resources/Magazin/afficherMagazin.html.twig",array("magazin"=>$magazin));
    }
    public function supprimerAction($id_mag)
    {
        $em=$this->getDoctrine()->getManager();
        $magazin = $em->getRepository(Magazin::class)->find($id_mag);
        $em->remove($magazin);
        $em->flush();
        return $this->redirectToRoute('afficherMagazin');
    }
    public function ajouterMagazinAction(Request $request)
    {
        $magazin = new Magazin();
        $Form = $this->createForm(MagazinType::class,$magazin);
        $Form->add('Ajouter', SubmitType::class);
        $Form->handleRequest($request);
        if ($Form->isSubmitted()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($magazin);
            $em->flush();
            return $this->redirectToRoute('afficherMagazin');
        }
        return $this->render('@Resources/Magazin/ajouterMagazin.html.twig',
            array('form' => $Form->createView()));
    }
    function ModifierMagazinAction($id_mag,Request $request)
    {
        $em= $this->getDoctrine()->getManager();
        $magazin = $em->getRepository(Magazin::class)->find($id_mag);
        $Form=$this->createForm(MagazinType::class,$magazin);
        $Form->add('Modifier', SubmitType::class);
        $Form->handleRequest($request);
        if($Form->isSubmitted())
        {
            $em= $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute('afficherMagazin');
        }
        return $this->render('@Resources/Magazin/ModifierMagazin.html.twig',array('form'=>$Form->createView()));
    }
}

