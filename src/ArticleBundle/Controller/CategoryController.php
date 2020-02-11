<?php

namespace ArticleBundle\Controller;

use ArticleBundle\Entity\Category;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Bundle\FrameworkBundle\Tests\Fixtures\Validation;
use Symfony\Bundle\FrameworkBundle\Tests\Fixtures\Validation\NotExistingInterface;
use Symfony\Component\HttpFoundation\Request;
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

            return $this->redirect('/view-category/' . $category->getId());

        }

        return $this->render(
            'category/edit.html.twig',
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
    public function showAction()
    {

        $category = $this->getDoctrine()
            ->getRepository('ArticleBundle:Category')
            ->findAll();

        return $this->render(
            'Category/ShowCategory.html.twig', array('category' => $category));
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

            return $this->redirect('/view-category/' . $id);

        }

        return $this->render(
            'Category/EditCategory.html.twig',
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
                'no Categories with the following id: ' . $id
            );
        }

        return $this->render(
            'Category/viewCategories.html.twig',
            array('category' => $category)
        );

    }
}
