<?php

namespace PensandooDireito\FormsBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends FOSRestController
{
    public function indexAction($name)
    {

        $view = $this->view(array('name' => $name), 200)
//            ->setTemplate("PensandooDireitoFormsBundle:Default:index.html.twig")
//            ->setFormat('json')
        ;

        return $this->handleView($view);
    }
}
