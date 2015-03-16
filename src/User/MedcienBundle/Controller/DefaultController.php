<?php

namespace User\MedcienBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('UserMedcienBundle:Default:index.html.twig', array('name' => $name));
    }
}
