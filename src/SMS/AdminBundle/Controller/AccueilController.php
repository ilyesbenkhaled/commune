<?php

namespace SMS\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AccueilController extends Controller
{
    public function accueilAction()
    {
        return $this->render('SMSAdminBundle:Admin:accueil-admin.html.twig');
    }
	
	public function languageAction($_locale = 'fr')
    {
		$request = $this->container->get('request');
		$routeName = $request->get('_route');
		$request->setLocale($_locale);
		return $this->render('SMSAdminBundle:Admin:accueil-admin.html.twig');

    }
}
