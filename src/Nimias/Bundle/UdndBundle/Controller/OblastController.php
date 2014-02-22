<?php

namespace Nimias\Bundle\UdndBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Nimias\Bundle\UdndBundle\Entity\Oblast;

/**
 * Oblast controller.
 *
 */
class OblastController extends Controller
{

    /**
     * Lists all Oblast entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('UdndBundle:Oblast')->findAll();

        return $this->render('UdndBundle:Oblast:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Finds and displays a Oblast entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('UdndBundle:Oblast')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Oblast entity.');
        }

        return $this->render('UdndBundle:Oblast:show.html.twig', array(
            'entity'      => $entity,
        ));
    }
}
