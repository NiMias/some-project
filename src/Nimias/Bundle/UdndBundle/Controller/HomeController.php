<?php

namespace Nimias\Bundle\UdndBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('UdndBundle:Home:index.html.twig', array('name' => $name));
    }
}
