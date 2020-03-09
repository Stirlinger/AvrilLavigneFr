<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class homePageController extends AbstractController {
    /**
     * @Route("/", name="home_page")
     */
    public function index()
    {
        return $this->render('home_page/index.html.twig', [
            'controller_name' => 'homePageController',
        ]);
    }
}
