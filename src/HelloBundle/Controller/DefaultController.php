<?php

namespace HelloBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name, $surname)
    {
        return $this->render('HelloBundle:Default:index.html.twig', array('name'=>$name, 'surname'=>$surname));
    }
}
