<?php

namespace SMS\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class NewsController extends Controller
{
    public function newsAction()
    {
        return $this->render('SMSAdminBundle:Admin:news-admin.html.twig');
    }
}
