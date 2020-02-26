<?php
namespace ArticleBundle\Controller;
use ArticleBundle\Entity\Article;
use ArticleBundle\Entity\Category;
use ArticleBundle\Form\CategoryType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Bundle\FrameworkBundle\Tests\Fixtures\Validation;
use Symfony\Bundle\FrameworkBundle\Tests\Fixtures\Validation\NotExistingInterface;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\User\UserInterface;

class CategoryController extends Controller
{
    public function createAction(Request $request) {
        $category = new Category();
        $form =$this->createForm(CategoryType::class,$category);
        $form->add('save', SubmitType::class, array('label' => 'New Article'));
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $category = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($category);
            $em->flush();
            return $this->redirect('view-category/' . $category->getIdCategory());
        }
        return $this->render(
            '@Article/Category/EditCategory.html.twig',
            array('form' => $form->createView())
        );
    }
    //-------------------------
    public function deleteAction($id) {
        $em = $this->getDoctrine()->getManager();
        $category = $em->getRepository('ArticleBundle:Category')->find($id);
        if (!$category) {
            throw $this->createNotFoundException(
                'There are no Categories with the following id: ' . $id
            );
        }
        $em->remove($category);
        $em->flush();
        return $this->redirect('view-category/');
    }
    //-------------------------
    public function showAction()
    {
        $category = $this->getDoctrine()
            ->getRepository('ArticleBundle:Category')
            ->findAll();
        $lib=$category[0]->getLabel();

        $Article = $this->getDoctrine()
            ->getRepository('ArticleBundle:Article')
            ->findAll();
        return $this->render(
            '@Article/Category/ShowCategory.html.twig', array('category' => $category,'Article'=>$Article));
    }
    //---------------------------
    public function updateAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();
        $category = $em->getRepository('ArticleBundle:Category')->find($id);
        if (!$category) {
            throw $this->createNotFoundException(
                'There are no Categories with the following id: ' . $id
            );
        }
        $form = $this->createFormBuilder($category)
            ->add('label', TextType::class)
            ->add('save', SubmitType::class, array('label' => 'Update'))
            ->getForm();
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $category = $form->getData();
            $em->flush();
            return $this->redirect('/debo-pi/web/app_dev.php/article/view-category/' . $id);
        }
        return $this->render(
            '@Article/Category/EditCategory.html.twig',
            array('form' => $form->createView())
        );
    }
    //------------------------------------
    public function viewAction($id) {
        $category = $this->getDoctrine()
            ->getRepository('ArticleBundle:Category')
            ->find($id);
        if (!$category) {
            throw $this->createNotFoundException(
                'No Categories with the following id: ' . $id
            );
        }
        $lib=$category->getLabel();
        $form = $this->getDoctrine()
            ->getRepository('ArticleBundle:Article')
            ->findBy( ['label' => $lib]);

        return $this->render(
            '@Article/Category/viewCategories.html.twig',
            array('category' => $category,'form'=>$form)
        );
    }
    public function searchAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $requestString = $request->get('q');
        $category =  $em->getRepository(Category::class)->findEntitiesByString($requestString);
        if(!$category) {
            $result['category']['error'] = "No Categories found :( ";
        } else {
            $result['category'] = $this->getRealEntities($category);
        }
        return new Response(json_encode($result));
    }
    public function getRealEntities($category){
        foreach ($category as $categorys){
            $realEntities[$categorys->getIdCategory()] = [$categorys->getLabel(),$categorys->getIdCategory()];

        }
        return $realEntities;
    }
}