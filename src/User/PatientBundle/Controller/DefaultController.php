<?php

namespace User\PatientBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('UserPatientBundle:Default:index.html.twig', array('name' => $name));
    }
}
