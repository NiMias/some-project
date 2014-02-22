<?php

namespace Nimias\Bundle\UdndBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Nimias\Bundle\UdndBundle\Entity\Rayon;

/**
 * Rayon controller.
 *
 */
class RayonController extends Controller
{

    /**
     * Lists all Rayon entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('UdndBundle:Rayon')->findAll();

        return $this->render('UdndBundle:Rayon:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Finds and displays a Rayon entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('UdndBundle:Rayon')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Rayon entity.');
        }

        return $this->render('UdndBundle:Rayon:show.html.twig', array(
            'entity'      => $entity,
        ));
    }
}
