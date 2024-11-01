<?php

namespace App\Controller;

use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
class UserController extends AbstractController
{
    private UserRepository $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    #[Route('/profile', name: 'user_profile', methods: ['GET', 'POST'])]
    public function profile () : Response
    {
        //$admin_users = $this->userRepository->findAll();
        //$user = $this->getUser();
        $admin_users = "eh ";
        $user = "sayer";
        return $this->render('user/profile.html.twig');
/*
        return $this->render('user/profile.html.twig',
            ['user' => $user, 'admin_users' => $admin_users]);
*/
    }
}