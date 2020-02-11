<?php

namespace ReclamationBundle\Controller;

use ReclamationBundle\Entity\Appel_d_offre;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Appel_d_offre controller.
 *
 */
class Appel_d_offreController extends Controller
{
    /**
     * Lists all appel_d_offre entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $appel_d_offres = $em->getRepository('ReclamationBundle:Appel_d_offre')->findAll();

        return $this->render('appel_d_offre/index.html.twig', array(
            'appel_d_offres' => $appel_d_offres,
        ));
    }

    /**
     * Creates a new appel_d_offre entity.
     *
     */
    public function newAction(Request $request)
    {
        $appel_d_offre = new Appel_d_offre();
        $form = $this->createForm('ReclamationBundle\Form\Appel_d_offreType', $appel_d_offre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($appel_d_offre);
            $em->flush();

            return $this->redirectToRoute('appel_d_offre_show', array('id' => $appel_d_offre->getId()));
        }

        return $this->render('appel_d_offre/new.html.twig', array(
            'appel_d_offre' => $appel_d_offre,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a appel_d_offre entity.
     *
     */
    public function showAction(Appel_d_offre $appel_d_offre)
    {
        $deleteForm = $this->createDeleteForm($appel_d_offre);

        return $this->render('appel_d_offre/show.html.twig', array(
            'appel_d_offre' => $appel_d_offre,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing appel_d_offre entity.
     *
     */
    public function editAction(Request $request, Appel_d_offre $appel_d_offre)
    {
        $deleteForm = $this->createDeleteForm($appel_d_offre);
        $editForm = $this->createForm('ReclamationBundle\Form\Appel_d_offreType', $appel_d_offre);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('appel_d_offre_edit', array('id' => $appel_d_offre->getId()));
        }

        return $this->render('appel_d_offre/edit.html.twig', array(
            'appel_d_offre' => $appel_d_offre,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a appel_d_offre entity.
     *
     */
    public function deleteAction(Request $request, Appel_d_offre $appel_d_offre)
    {
        $form = $this->createDeleteForm($appel_d_offre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($appel_d_offre);
            $em->flush();
        }

        return $this->redirectToRoute('appel_d_offre_index');
    }

    /**
     * Creates a form to delete a appel_d_offre entity.
     *
     * @param Appel_d_offre $appel_d_offre The appel_d_offre entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Appel_d_offre $appel_d_offre)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('appel_d_offre_delete', array('id' => $appel_d_offre->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
