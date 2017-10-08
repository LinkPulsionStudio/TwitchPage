<?php

namespace TwitchPageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TwitchPageBundle:Default:index.html.twig');
    }
}
