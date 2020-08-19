<?php

namespace SMS\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BlocController extends Controller
{
    public function blocAction()
    {
        return $this->render('SMSAdminBundle:Admin:ajoutbloc.html.twig');
    }
}
