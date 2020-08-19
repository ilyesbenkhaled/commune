<?php

namespace SMS\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use SMS\AdminBundle\Entity\Liens;
use SMS\AdminBundle\Form\LiensType;

/**
 * Liens controller.
 *
 */
class LiensController extends Controller
{
    /**
     * Lists all Liens entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $liens = $em->getRepository('SMSAdminBundle:Liens')->findAll();

        return $this->render('SMSAdminBundle:liens:index.html.twig', array(
            'liens' => $liens,
        ));
    }

    /**
     * Creates a new Liens entity.
     *
     */
    public function newAction(Request $request)
    {
        $lien = new Liens();
        $form = $this->createForm('SMS\AdminBundle\Form\LiensType', $lien);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($lien);
            $em->flush();

            return $this->redirectToRoute('liens_show', array('id' => $lien->getId()));
        }

        return $this->render('SMSAdminBundle:liens:new.html.twig', array(
            'lien' => $lien,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Liens entity.
     *
     */
    public function showAction(Liens $lien)
    {
        $deleteForm = $this->createDeleteForm($lien);

        return $this->render('SMSAdminBundle:liens:show.html.twig', array(
            'lien' => $lien,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Liens entity.
     *
     */
    public function editAction(Request $request, Liens $lien)
    {
        $deleteForm = $this->createDeleteForm($lien);
        $editForm = $this->createForm('SMS\AdminBundle\Form\LiensType', $lien);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($lien);
            $em->flush();

            return $this->redirectToRoute('liens_edit', array('id' => $lien->getId()));
        }

        return $this->render('SMSAdminBundle:liens:edit.html.twig', array(
            'lien' => $lien,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Liens entity.
     *
     */
    public function deleteAction(Request $request, Liens $lien)
    {
        $form = $this->createDeleteForm($lien);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($lien);
            $em->flush();
        }

        return $this->redirectToRoute('liens_index');
    }

    /**
     * Creates a form to delete a Liens entity.
     *
     * @param Liens $lien The Liens entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Liens $lien)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('liens_delete', array('id' => $lien->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
