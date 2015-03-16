<?php

namespace User\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LoginController extends Controller
{
    public function indexAction()
    {
        return $this->render('UserAdminBundle:Profile:login.html.twig');
    }
    public function loginAction()
    {
        return $this->render('UserAdminBundle:Profile:login.html.twig');
    }
    public function signupAction()
    {
        return $this->render('UserAdminBundle:Profile:signup.html.twig');
    }

}
 
