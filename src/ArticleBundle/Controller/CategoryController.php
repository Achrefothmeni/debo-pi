<?php
namespace ArticleBundle\Controller;
use ArticleBundle\Entity\Category;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Bundle\FrameworkBundle\Tests\Fixtures\Validation;
use Symfony\Bundle\FrameworkBundle\Tests\Fixtures\Validation\NotExistingInterface;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
class CategoryController extends Controller
{
    public function createAction(Request $request) {
        $category = new Category();
        $form = $this->createFormBuilder($category)
            ->add('libelle', TextType::class)
            ->add('save', SubmitType::class, array('label' => 'New Category'))
            ->getForm();
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $category = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($category);
            $em->flush();
            return $this->redirect('article/view-category/' . $category->getIdCategory());
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
        return $this->redirect('/view-category/');
    }
    //-------------------------
    public function showAction()
    {

        $category = $this->getDoctrine()
            ->getRepository('ArticleBundle:Category')
            ->findAll();
        return $this->render(
            '@Article/Category/ShowCategory.html.twig', array('category' => $category));
    }
    //---------------------------
    public function updateAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();
        $category = $em->getRepository('ArticleBundle:Article')->find($id);
        if (!$category) {
            throw $this->createNotFoundException(
                'There are no Categories with the following id: ' . $id
            );
        }
        $form = $this->createFormBuilder($category)
            ->add('libelle', TextType::class)
            ->add('save', SubmitType::class, array('label' => 'Update'))
            ->getForm();
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $category = $form->getData();
            $em->flush();
            return $this->redirect('category/view-category/' . $id);
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
        $lib=$category->getLibelle();
        $form = $this->getDoctrine()
            ->getRepository('ArticleBundle:Article')
            ->find($lib);
        if (!$category) {
            throw $this->createNotFoundException(
                'no Categories with the following id: ' . $id
            );
        }
        return $this->render(
            '@Article/Category/viewCategories.html.twig',
            array('category' => $category,'form'=>$form)
        );
    }
}