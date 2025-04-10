<?php

namespace App\Controller;

use App\Repository\InfoRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class HomeController extends AbstractController
{
    #[Route('/home', name: 'app_home')]
    public function index(InfoRepository $infoRepo, Security $security): Response
    {
        $user = $security->getUser();
        $info = $infoRepo->findOneBy(['user' => $user]);
            
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'info' => $info,
        ]);
    }
}
