<?php

namespace User\AdminBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class UserAdminBundle extends Bundle
{
    public function getParent() {
          return 'FOSUserBundle';
    }
}
