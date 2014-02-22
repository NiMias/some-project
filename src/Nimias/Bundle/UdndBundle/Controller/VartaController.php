<?php

namespace Nimias\Bundle\UdndBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Nimias\Bundle\UdndBundle\Entity\Varta;
use Nimias\Bundle\UdndBundle\Form\VartaType;

/**
 * Varta controller.
 *
 */
class VartaController extends Controller
{

    /**
     * Lists all Varta entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('UdndBundle:Varta')->findAll();

        return $this->render('UdndBundle:Varta:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Varta entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Varta();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('varta_show', array('id' => $entity->getId())));
        }

        return $this->render('UdndBundle:Varta:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a Varta entity.
    *
    * @param Varta $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Varta $entity)
    {
        $form = $this->createForm(new VartaType(), $entity, array(
            'action' => $this->generateUrl('varta_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Varta entity.
     *
     */
    public function newAction()
    {
        $entity = new Varta();
        $form   = $this->createCreateForm($entity);

        return $this->render('UdndBundle:Varta:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Varta entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('UdndBundle:Varta')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Varta entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('UdndBundle:Varta:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Varta entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('UdndBundle:Varta')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Varta entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('UdndBundle:Varta:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Varta entity.
    *
    * @param Varta $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Varta $entity)
    {
        $form = $this->createForm(new VartaType(), $entity, array(
            'action' => $this->generateUrl('varta_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Varta entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('UdndBundle:Varta')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Varta entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('varta_edit', array('id' => $id)));
        }

        return $this->render('UdndBundle:Varta:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Varta entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('UdndBundle:Varta')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Varta entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('varta'));
    }

    /**
     * Creates a form to delete a Varta entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('varta_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
