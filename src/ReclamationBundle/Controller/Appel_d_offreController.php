<?php

namespace ReclamationBundle\Controller;

use ReclamationBundle\Entity\Appel_d_offre;
use ReclamationBundle\Form\Appel_d_offreType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;


class Appel_d_offreController extends Controller
{

    public function showTendersAction()
    {
        $em = $this->getDoctrine()->getManager();
        $appel_d_offres = $em->getRepository('ReclamationBundle:Appel_d_offre')->findAll();
        return $this->render('@Resources/Tenders/afficherTenders.html.twig', array(
            'appel_d_offres' => $appel_d_offres,
        ));
    }


    public function createTendersAction(Request $request)
    {
        $appel_d_offre = new Appel_d_offre();
        $form = $this->createForm(Appel_d_offreType::class,$appel_d_offre);
        $form->add('Publier', SubmitType::class);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($appel_d_offre);
            $em->flush();

            return $this->redirectToRoute('appel_d_offre_show', array('id' => $appel_d_offre->getId()));
        }

        return $this->render('@Resources/Tenders/afficherTenders.html.twig', array(
            'appel_d_offre' => $appel_d_offre,
            'form' => $form->createView(),
        ));
    }
    public function editTendersAction($id,Request $request)
    {
        $em= $this->getDoctrine()->getManager();
        $appel_d_offre= $em->getRepository(Appel_d_offre::class)->find($id);
        $form = $this->createForm(Appel_d_offreType::class,$appel_d_offre);
        $form->add('Modifier', SubmitType::class);
        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();
            return $this->redirectToRoute('appel_d_offre_show');
        }
        return $this->render('@Resources/Tenders/editTender.html.twig', array(
            'form' => $form->createView(),
        ));
    }


    public function deleteTenderAction($id)
    {
        $em=$this->getDoctrine()->getManager();
        $fleet = $em->getRepository(Appel_d_offre::class)->find($id);
        $em->remove($fleet);
        $em->flush();
        return $this->redirectToRoute('afficher_Tenders');
    }

}
