<?php

namespace ResourcesBundle\Controller;

use ArticleBundle\Entity\Article;
use AuthBundle\Entity\User;
use Doctrine\ORM\EntityRepository;
use ResourcesBundle\Entity\Magazin;
use ResourcesBundle\Form\MagazinType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
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
            $magazin->SetIdMag($id_mag);
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
    function searchAction(Request $request){
        $magazin=new magazin();
        $em=$this->getDoctrine()->getManager();
        $Form = $this->createFormBuilder($magazin)->add('category',EntityType::class,array(
                'class'=>'ArticleBundle:Category',
                'choice_label'=>'libelle',
                'multiple'=>false)
        )->add('location')->add('search',SubmitType::class)->getForm();
        $Form->handleRequest($request);
        if($Form->isSubmitted()){
            $str=$magazin->getLocation();
            $str2=$magazin->getCategory();
            $magazin=$em->getRepository('ResourcesBundle:Magazin')
                ->findMagazins($str,$str2);
        }
        else{
            $magazin=$em->getRepository(Magazin::class)
                ->findAll();
        }

        return $this->render('@Resources/Magazin/search.html.twig',
            array('magazin'=>$magazin,'form'=>$Form->createView()));
    }

    function affecterMagazinAction($id_mag,Request $request)
    {
        $magazin=$this->getDoctrine()
            ->getRepository(Magazin::class)
        ->find($id_mag);

        $magazinier=$this->getDoctrine()
            ->getRepository(User::class)
            ->findByRole('ROLE_WAREHOUSE_MANAGER');


        return $this->render('@Resources/Magazin/affecter.html.twig', array('magazin' => $magazin,
            'magazinier' => $magazinier));

    }
    public function ajouterMagazinierAction($id_mag,Request $request)
    {

        $magazin = $this->getDoctrine()->getRepository(Magazin::class)->find($id_mag);
        $magazinier = $this->getDoctrine()
            ->getRepository(User::class)
            ->find($request->request->get('magazinier'));
        $magazin->setMagazinier($magazinier);
      $em=$this->getDoctrine()->getManager();
        $twilio = $this->get('twilio.api');
        $msg = "vous etes le responsable du Magazin numero ".$magazin->getIdMag()." situé à ".$magazin->getLocation();


        $message = $twilio->account->messages->sendMessage(
            '+13345106423', // From a Twilio number in your account
            '+21650802348', // Text any number
            $msg
        );
        $em->flush();
        return $this->redirectToRoute('afficherMagazin');
    }

    function affecterArticleAction($idArticle,Request $request)
    {
        $article=$this->getDoctrine()
            ->getRepository(Article::class)
            ->find($idArticle);


$category = null;
        $capacity = $article->getQuantity();

        $magazin=$this->getDoctrine()
            ->getRepository('ResourcesBundle:Magazin')
            ->findMagazin($category,$capacity);


        return $this->render('@Resources/Magazin/affecterArticle.html.twig', array('article' => $article,
            'magazin' => $magazin));
    }

    public function ajouterArticleAction($idArticle,Request $request)
    {

        $article = $this->getDoctrine()->getRepository(Article::class)->find($idArticle);

        $magazin = $this->getDoctrine()
            ->getRepository(Magazin::class)
            ->find($request->request->get('magazin'));
        $article->setMagazin($magazin);
        $magazin->setCapacityRest($magazin->getCapacityRest()+$article->getQuantity());
        $em=$this->getDoctrine()->getManager();

        $em->flush();
        return $this->redirectToRoute('show-articles');
    }

}

