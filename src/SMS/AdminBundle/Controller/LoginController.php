<?php

namespace SMS\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LoginController extends Controller
{
    public function loginAction()
    {
        return $this->render('SMSAdminBundle:Admin:login-admin.html.twig');
    }
}
