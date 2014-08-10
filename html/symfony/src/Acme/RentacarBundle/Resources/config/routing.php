<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('acme_rentacar_homepage', new Route('/hello/{name}', array(
    '_controller' => 'AcmeRentacarBundle:Default:index',
)));

return $collection;
