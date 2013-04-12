<?php

namespace Gigablah\PersonaProviderDemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    public function indexAction()
    {
        return $this->render('GBPersonaProviderDemoBundle:Home:index.html.twig');
    }
}
