<?php

namespace User\AdminBundle\Controller;

/**
 * Description of RegistrationController
 *
 * @author King
 */
use FOS\UserBundle\Controller\RegistrationController;

class Registration1Controller {

    public function registerAction() {
        $response = parent::registerAction();
        return $response;
    }

}
