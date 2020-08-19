<?php

namespace SMS\CommuneBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AccueilController extends Controller
{
    public function indexAction()
    {
		 $repository = $this
		  ->getDoctrine()
		  ->getManager()
		  ->getRepository('ApplicationSonataNewsBundle:Post');

		$listnews = $repository->findAll();
		return $this->render('SMSCommuneBundle:Accueil:index.html.twig',array('listnews'=>$listnews));
	}
	public function languageAction($_locale = 'fr')
    {
		$request = $this->container->get('request');
		$routeName = $request->get('_route');
		$request->setLocale($_locale);
		return $this->render('SMSCommuneBundle:Accueil:index.html.twig');

    }
}
