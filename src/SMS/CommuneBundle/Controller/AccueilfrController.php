<?php

namespace SMS\CommuneBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AccueilfrController extends Controller
{
    public function indexAction()
    {
        return $this->render('SMSCommuneBundle:Accueilfr:index.html.twig');
    }
}
