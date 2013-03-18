<?php

namespace Epiphany\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('EpiphanyTestBundle:Default:index.html.twig', array('name' => $name));
    }
}
