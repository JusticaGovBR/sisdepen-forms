<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use FOS\RestBundle\Controller\FOSRestController;

class UsersController extends FOSRestController
{
    /**
     * @Route("/users", name="users")
     */
    public function getUsersAction()
    {

        $data = $this->get('doctrine_mongodb')->getRepository('AppBundle:User')->findAll();

        $view = $this->view($data, 200)
            ->setTemplate("users/getUsers.html.twig")
            ->setTemplateVar('users');

        return $this->handleView($view);

    }
}