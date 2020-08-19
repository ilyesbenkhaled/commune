<?php

namespace SMS\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use SMS\AdminBundle\Entity\Block;
use SMS\AdminBundle\Form\BlockType;

/**
 * Block controller.
 *
 */
class BlockController extends Controller
{
    /**
     * Lists all Block entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $blocks = $em->getRepository('SMSAdminBundle:Block')->findAll();
        
        return $this->render('SMSAdminBundle:block:index.html.twig', array(
            'blocks' => $blocks,
			
        ));
    }

    /**
     * Creates a new Block entity.
     *
     */
    public function newAction(Request $request)
    {
		$em = $this->getDoctrine()->getManager();
		$langues = $em->getRepository('SMSAdminBundle:Langue')->findAll();
        $block = new Block();
        $form = $this->createForm('SMS\AdminBundle\Form\BlockType', $block);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($block);
            $em->flush();

            return $this->redirectToRoute('block_show', array('id' => $block->getId()));
        }

        return $this->render('SMSAdminBundle:block:new.html.twig', array(
            'block' => $block,
			'langues' => $langues,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Block entity.
     *
     */
    public function showAction(Block $block)
    {
        $deleteForm = $this->createDeleteForm($block);

        return $this->render('SMSAdminBundle:block:show.html.twig', array(
            'block' => $block,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Block entity.
     *
     */
    public function editAction(Request $request, Block $block)
    {
        $deleteForm = $this->createDeleteForm($block);
        $editForm = $this->createForm('SMS\AdminBundle\Form\BlockType', $block);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($block);
            $em->flush();

            return $this->redirectToRoute('block_edit', array('id' => $block->getId()));
        }

        return $this->render('block/edit.html.twig', array(
            'block' => $block,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Block entity.
     *
     */
    public function deleteAction(Request $request, Block $block)
    {
        $form = $this->createDeleteForm($block);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($block);
            $em->flush();
        }

        return $this->redirectToRoute('block_index');
    }

    /**
     * Creates a form to delete a Block entity.
     *
     * @param Block $block The Block entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Block $block)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('block_delete', array('id' => $block->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
