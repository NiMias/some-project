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
