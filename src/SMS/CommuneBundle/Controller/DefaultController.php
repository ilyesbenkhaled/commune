<?php

namespace SMS\CommuneBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SMSCommuneBundle:Default:index.html.twig');
    }
}
