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
        $data = ['user1', 'user2', 'user3', 'user4'];

        $view = $this->view($data, 200)
            ->setTemplate("users/getUsers.html.twig")
            ->setTemplateVar('users');

        return $this->handleView($view);

    }
}