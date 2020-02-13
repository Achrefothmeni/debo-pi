<?php

namespace AuthBundle\Controller;

use AuthBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UserController extends Controller
{
    public function getAllUsersAction()
    {
        $users=$this->getDoctrine()
            ->getRepository(User::class)
            ->findAll();

        return $this->render('', array('users' => $users));
    }
}
