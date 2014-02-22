<?php

namespace Nimias\Bundle\UdndBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Nimias\Bundle\UdndBundle\Entity\Misto;

/**
 * Misto controller.
 *
 */
class MistoController extends Controller
{

    /**
     * Lists all Misto entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('UdndBundle:Misto')->findAll();

        return $this->render('UdndBundle:Misto:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Finds and displays a Misto entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('UdndBundle:Misto')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Misto entity.');
        }

        return $this->render('UdndBundle:Misto:show.html.twig', array(
            'entity'      => $entity,
        ));
    }
}
