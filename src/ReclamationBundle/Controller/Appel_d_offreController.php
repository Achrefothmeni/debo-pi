<?php

namespace ReclamationBundle\Controller;

use ArticleBundle\Entity\Article;
use ReclamationBundle\Entity\Appel_d_offre;
use ReclamationBundle\Entity\ArticleAppel_d_offre;
use ReclamationBundle\Entity\Prop_App_offre;
use ReclamationBundle\Form\Appel_d_offreType;
use ReclamationBundle\ReclamationBundle;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;


class Appel_d_offreController extends Controller
{

    public function showTendersAction()
    {
        $em = $this->getDoctrine()->getManager();
        $appel_d_offres = $em->getRepository('ReclamationBundle:Appel_d_offre')->findAll();
        return $this->render('@Reclamation/Tenders/afficherTenders.html.twig', array(
            'appel_d_offres' => $appel_d_offres,
        ));
    }


    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $query="select * from article_Appel_d_offre where idTender = $id";
        $appel_d_offres = $em->getConnection()->prepare($query);
        $appel_d_offres->execute();
        return $this->render('@Reclamation/Tenders/afficherTenderAdmin.html.twig', array(
            'appel_d_offres' => $appel_d_offres,
        ));
    }

    public function createTendersAction( Request $request)
    {
        $appel_d_offre = new Appel_d_offre();
        $form = $this->createForm(Appel_d_offreType::class,$appel_d_offre);
        $form->add('Create', SubmitType::class);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($appel_d_offre);
            $em->flush();
            return $this->redirectToRoute('articleTender_add', array('id' => $appel_d_offre->getId()));
        }

        return $this->render('@Reclamation/Tenders/createTender.html.twig', array(
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
        return $this->render('@Reclamation/Tenders/editTender.html.twig', array(
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

    public function addArticleAction($id){
        $articles = $this->getDoctrine()
            ->getRepository('ArticleBundle:Article')
            ->findAll();
        return $this->render('@Reclamation/Tenders/addArticle2.html.twig', array('articles' => $articles, 'id' => $id));

    }
    public  function addArticle2Action($id, $idArticle, Request $request){
        $article = $this->getDoctrine()
            ->getRepository('ArticleBundle:Article')
            ->find($idArticle);
        $appelOffre = $this->getDoctrine()
            ->getRepository('ReclamationBundle:Appel_d_offre')
            ->find($id);


        $article_tender = new ArticleAppel_d_offre();
        $article_tender->setArticle($article);
        $article_tender->setIdTender($appelOffre);
        $article_tender->setQuantit($request->request->get('stock'));
        $em = $this->getDoctrine()->getManager();
        $em->persist($article_tender);
        $em->flush();
        return $this->redirectToRoute('articleTender_add', array('id' => $appelOffre->getId()));
    }
    public function addPriceAction($id, Request $request){
        $appelOffre = $this->getDoctrine()
            ->getRepository('ReclamationBundle:Appel_d_offre')
            ->find($id);
        $prix_prop = new Prop_App_offre();
        $prix_prop->setPrixProp($request);
        $prix_prop->setOffre($appelOffre);
        $em = $this->getDoctrine()->getManager();
        $em->persist($prix_prop);
        $em->flush();
        return $this->render('@Reclamation/Tenders/tenderPrice.html.twig', array(
            'appelOffres' => $appelOffre,
        ));
    }
}
