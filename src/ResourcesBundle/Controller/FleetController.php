<?php

namespace ResourcesBundle\Controller;

use Symfony\Component\Form\Extension\Core\Type\DateType;
use ResourcesBundle\Entity\Fleet;
use ResourcesBundle\Form\FleetType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
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
        $Form->add('Ajouter', SubmitType::class)->add('image',FileType::Class,['mapped'=>false]);
        $Form->handleRequest($request);
        $em = $this->getDoctrine()->getManager();
        if ($Form->isSubmitted()) {
            $imageFile = $Form->get('image')->getData();
            if ($imageFile) {
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                $newFilename = $originalFilename.'-'.uniqid().'.'.$imageFile->guessExtension();}
                try {
                    $imageFile->move(
                        $this->getParameter('images_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {

                }
            $em = $this->getDoctrine()->getManager();
            $fleet->setImage($newFilename);

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
        $magazin = $em->getRepository(Fleet::class)->find($matriculation);
        $Form=$this->createForm(FleetType::class,$magazin);
        $Form->add('Modifier', SubmitType::class);
        $Form->handleRequest($request);
        if($Form->isSubmitted())
        {
            $em= $this->getDoctrine()->getManager();
            $magazin->setMatriculation($matriculation);
            $em->flush();
            return $this->redirectToRoute('afficherFleet');
        }
        return $this->render('@Resources/Fleet/ModifierFleet.html.twig',array('form'=>$Form->createView()));
    }
    function searchAction(Request $request){
        $fleet=new fleet();
        $em=$this->getDoctrine()->getManager();
        $Form = $this->createFormBuilder($fleet)->add('category',EntityType::class,array(
                'class'=>'ArticleBundle:Category',
                'choice_label'=>'libelle',
                'multiple'=>false)
        )->add('nature',EntityType::class,array(
                'class'=>'ResourcesBundle:Nature',
                'choice_label'=>'libelle',
                'multiple'=>false)
        )->add('date',DateType::class)->add('search',SubmitType::class)->getForm();
        $Form->handleRequest($request);
        if($Form->isSubmitted())
        {
            $str=$fleet->getCategory();
            $str2=$fleet->getNature();
            $str3=$fleet->getDate();

            $fleet=$em->getRepository('ResourcesBundle:Fleet')->findFleets($str,$str2,$str3);
        }
        else{
            $fleet=$em->getRepository(Fleet::class)
                ->findAll();
        }

        return $this->render('@Resources/Fleet/search.html.twig',
            array('fleet'=>$fleet,'form'=>$Form->createView()));
    }


}
