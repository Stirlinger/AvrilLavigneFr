<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

class AdminController extends AbstractController{
    /**
     * @Route("/admin", name="app_admin")
     * @IsGranted("ROLE_ADMIN")
     */
    public function index(){
        return $this->render('admin/adminPage.html.twig');
    }
}
