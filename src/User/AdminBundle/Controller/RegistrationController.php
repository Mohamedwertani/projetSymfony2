<?php
 
namespace User\AdminBundle\Controller;

/**
 * Description of RegistrationController
 *
 * @author King
 */
use FOS\UserBundle\Controller\RegistrationController ;
class RegistrationController {
    public function registreAction()
    {
        $response  = parent::registerAction();
        return $response ;
    }
}
