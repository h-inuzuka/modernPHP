<?php

namespace Acme\RentacarBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AcmeRentacarBundle:Default:index.html.twig', array('name' => $name));
    }
}
