<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace User\AdminBundle\Entity;

/**
 * Description of User
 *
 * @author King
 */
use FOS\UserBundle\Model\User as BaseUser ;
/**
 * User
 */
class User extends BaseUser
{
    public function __construct()
    {
        parent::__construct();
        // your own logic
    }
}