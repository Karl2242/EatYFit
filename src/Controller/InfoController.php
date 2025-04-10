<?php

namespace App\Controller;

use App\Entity\Info; // Ton entité (si besoin)
use App\Form\InfoType; // Ton type de formulaire
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class InfoController extends AbstractController
{
    #[Route('/info', name: 'app_info')]
    public function index(Request $request,  Security $security, EntityManagerInterface $entityManager): Response
    {
        
        $user = $security->getUser();
        $info = $entityManager->getRepository(Info::class)->findOneBy(['user' => $user]); // ou l'entité que tu veux remplir

        if (!$info) {
            $info = new Info();
            $info->setUser($user);
        }

        $form = $this->createForm(InfoType::class, $info);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // logiques de traitement, ex : sauvegarder les données


            $info->setUser($user);

            $entityManager->persist($info);
            $entityManager->flush();


            return $this->redirectToRoute(("app_home"));
            // do anything else you need here, like send an email

        }

        return $this->render('info/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
