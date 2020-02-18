<?php

namespace ResourcesBundle\Controller;

use ResourcesBundle\Entity\Magazin;
use ResourcesBundle\Form\MagazinType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

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
    public function callAction()
    {
        //returns an instance of Vresh\TwilioBundle\Service\TwilioWrapper
        $twilio = $this->get('twilio.api');

        $message = $twilio->account->messages->sendMessage(
            '+13345106423', // From a Twilio number in your account
            '+21650802348', // Text any number
            "Test Pidev"
        );

        //get an instance of \Service_Twilio
        $otherInstance = $twilio->createInstance('BBBB', 'CCCCC');

        return new Response($message->sid);
    }
}

