<?php

namespace TwitchPageAdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TwitchPageAdminBundle:Default:index.html.twig');
    }
}
