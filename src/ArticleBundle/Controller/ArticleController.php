<?php

namespace ArticleBundle\Controller;

use ArticleBundle\Form\ArticleType;
use ArticleBundle\Entity\Article;
use ArticleBundle\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\User\UserInterface;

class ArticleController extends Controller
{
    public function createAction(Request $request) {

        $article = new Article();
        $form = $this->createForm(ArticleType::class,$article);
        $form->add('save', SubmitType::class, array('label' => 'New Article'));
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $file=$article->getImage();
            $fileName =md5(uniqid()).'.'.$file->guessExtension();

            try {
                $file->move(
                    $this->getParameter('images_directory'),
                    $fileName
                );
            } catch (FileException $e) {
                // ... handle exception if something happens during file upload
            }
            $article->getIdArticle();
            $em = $this->getDoctrine()->getManager();
            $article->setImage($fileName);
            $em->persist($article);
            $em->flush();

            return $this->redirect('view-article/' . $article->getIdArticle());
        }

        return $this->render(
            '@Article/Article/EditArticle.html.twig',
            array('form' => $form->createView())
        );

    }
    //------------------------------------------------------------
    public function deleteAction($id) {

        $em = $this->getDoctrine()->getManager();
        $article = $em->getRepository('ArticleBundle:Article')->find($id);

        if (!$article) {
            throw $this->createNotFoundException(
                'There are no articles with the following id: ' . $id
            );
        }

        $em->remove($article);
        $em->flush();

        return $this->redirect('/article/show-articles');

    }
    public function showAction() {

        $articles = $this->getDoctrine()
            ->getRepository('ArticleBundle:Article')
            ->findAll();

        return $this->render(
            '@Article/Article/ShowArticles.html.twig',

            array('articles' => $articles)
        );

    }
    //------------------------------------------------------------
    public function showFrontAction() {

        $articles = $this->getDoctrine()
            ->getRepository('ArticleBundle:Article')
            ->findAll();
        $categorys = $this->getDoctrine()
            ->getRepository('ArticleBundle:Category')
            ->findAll();
        return $this->render(
            '@Article/ArticleFront/ShowArticles.html.twig',

            array('articles' => $articles,'categorys'=>$categorys)
        );
    }
    //------------------------------------------------------------
    public function updateAction(Request $request, $id) {

        $em = $this->getDoctrine()->getManager();
        $article = $em->getRepository('ArticleBundle:Article')->find($id);
        if (!$article) {
            throw $this->createNotFoundException(
                'There are no articles with the following id: ' . $id
            );
        }

        $form = $this->createFormBuilder($article)
            ->add('name', TextType::class)
            ->add('price', TextType::class)
            ->add('image',FileType::class,[
                'mapped'=>false
            ])
            ->add('quantity', TextType::class)
            ->add('description', TextareaType::class)
            ->add('label', TextType::class)
            ->add('save', SubmitType::class, array('label' => 'Update'))
            ->getForm();
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())  {
            $file=$article->getImage();
            $fileName =md5(uniqid()).'.'.$file->guessExtension();
            try {
                $file->move(
                    $this->getParameter('images_directory'),
                    $fileName
                );
            } catch (FileException $e) {
                'Error during the add of the image';
            }

            $em = $this->getDoctrine()->getManager();
            $article->setImage($fileName);
            $article = $form->getData();
            $em->flush();

            return $this->redirect('view-article/' . $article->getIdArticle());
        }

        return $this->render(
            '@Article/Article/updateArticle.html.twig',
            array('form' => $form->createView())
        );
    }
    //------------------------------------------------------------
    public function viewAction($id) {
        $article = $this->getDoctrine()
            ->getRepository('ArticleBundle:Article')
            ->find($id);

        if (!$article) {
            throw $this->createNotFoundException(
                'There are no articles with the following id: ' . $id
            );
        }
        return $this->render(
            '@Article/Article/view.html.twig',
            array('article' => $article)
        );
    }
    public function searchAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $requestString = $request->get('q');
        $article =  $em->getRepository(Article::class)->findEntitiesByString($requestString);
        if(!$article) {
            $result['posts']['error'] = "No Products found :( ";
        } else {
            $result['posts'] = $this->getRealEntities($article);
        }
        return new Response(json_encode($result));
    }
    public function getRealEntities($article){
        foreach ($article as $articles){
            $realEntities[$articles->getIdArticle()] = [$articles->getName(),$articles->getImage()];

        }
        return $realEntities;
    }
}